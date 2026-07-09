<?php
/**
 * OpenRouter API Configuration & Helper
 * 
 * IMPORTANT: Add .env to .gitignore to keep your API key secure!
 */

// Load API key from environment or config
function getOpenRouterApiKey() {
    // Option 1: From environment variable (recommended)
    $key = getenv('OPENROUTER_API_KEY');
    
    // Option 2: From config file (fallback)
    if (empty($key)) {
        $configFile = __DIR__ . '/../config.php';
        if (file_exists($configFile)) {
            $config = require $configFile;
            $key = $config['openrouter_api_key'] ?? '';
        }
    }
    
    return $key;
}

/**
 * Call OpenRouter API with Claude Opus 5
 */
function callClaude($messages, $model = 'anthropic/claude-opus-5', $maxTokens = 4096) {
    $apiKey = getOpenRouterApiKey();
    
    if (empty($apiKey)) {
        throw new Exception('OpenRouter API key not configured');
    }
    
    $ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
    
    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
        'HTTP-Referer: ' . ($_SERVER['HTTP_REFERER'] ?? 'https://sankalphospital.com'),
        'X-Title: Sankalp Hospital Website'
    ];
    
    $payload = [
        'model' => $model,
        'messages' => $messages,
        'max_tokens' => $maxTokens
    ];
    
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_TIMEOUT => 60
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        throw new Exception("API request failed with HTTP $httpCode: $response");
    }
    
    $result = json_decode($response, true);
    
    if (isset($result['error'])) {
        throw new Exception("API Error: " . $result['error']['message']);
    }
    
    return $result['choices'][0]['message']['content'] ?? '';
}
