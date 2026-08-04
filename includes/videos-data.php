<?php
/**
 * Sankalp Hospital — central YouTube video catalog + embed helpers.
 * Channel: SANKALP HOSPITAL AMBIKAPUR (UCWGjgpakHsg7z4qMbXBSK_w)
 * 186 videos catalogued Aug 2026, tagged by clinical topic so the
 * right videos can be embedded on service pages, blog posts and the gallery.
 *
 * Update videos HERE (never inline on a page). Helpers:
 *   sankalp_videos_by_cat($cats, $limit, $longOnly)  -> array of videos
 *   sankalp_video_section($cats, $opts)              -> echo a full "Related Videos" block
 *   sankalp_video_facade($id, $title)                -> single click-to-play card
 *   sankalp_video_assets()                           -> CSS+JS (auto-injected once)
 */

if (!function_exists('sankalp_all_videos')) {

function sankalp_channel_id()  { return 'UCWGjgpakHsg7z4qMbXBSK_w'; }
function sankalp_channel_url()  { return 'https://www.youtube.com/@sankalphospitalambikapur'; }

/** The full catalog. t: 'v' = long-form video, 's' = Short. */
function sankalp_all_videos() {
  static $v = null;
  if ($v !== null) return $v;
  $v = [
  ['id'=>'5KMfxqDP_mA','t'=>'v','tags'=>['gynecology'],'title'=>'पेट में 20cm की Cyst बेटी की शादी की चिंता में जी रही थी मां | Dr Ankita Bansal Goyal'],
  ['id'=>'ji4070ZK7eM','t'=>'v','tags'=>['gynecology'],'title'=>'Vaginal Swelling Causes | योनि में सूजन का कारण क्या है? | Dr. Ankita Bansal Goyal'],
  ['id'=>'GpMCpCQo7CQ','t'=>'v','tags'=>['pregnancy'],'title'=>'Delivery के लिए Hospital Bag में क्या pack करें? Pregnancy Hospital Bag Essentials | Dr Ankita Goyal'],
  ['id'=>'YpcOvwcD1rk','t'=>'v','tags'=>['ivf'],'title'=>'IVF के बारे में 5 सबसे बड़े मिथक | IVF Success Rate, Age, Cost & Hormones'],
  ['id'=>'cRgzn1C3DHU','t'=>'v','tags'=>['diabetes'],'title'=>'थकान रहती है? हो सकता है Insulin Resistance! | Fatty Liver, Belly Fat & Diabetes Warning Signs'],
  ['id'=>'fhv3UFO-zXs','t'=>'v','tags'=>['pregnancy'],'title'=>'लास्ट मोमेंट पर C-Section छोड़ Normal Delivery चुनी! | Emotional Birth Story'],
  ['id'=>'Zba8f47sYMw','t'=>'v','tags'=>['diabetes'],'title'=>'Diabetes को शुरुआत में कंट्रोल नहीं किया तो क्या होगा? | Real Story of Ramesh & Suresh'],
  ['id'=>'Ncs05CLkX8Y','t'=>'v','tags'=>['emergency','neurosurgery'],'title'=>'Helmet & Seat Belt Save Lives Don\'t Avoid Them  | Brain Injury & Paralysis Risk | Ambikapur,'],
  ['id'=>'qnA03oATGV4','t'=>'v','tags'=>['pregnancy'],'title'=>'C-Section का सच क्या है? | OT के अंदर क्या होता है? | Doctor Explains 7 Steps!'],
  ['id'=>'q4MYLFvW_vQ','t'=>'v','tags'=>['laparoscopy','gastro'],'title'=>'सर्जरी के डर से दर्द सह रहे हैं क्यों? | Gallbladder Stone, Appendicitis, Laparoscopy Treatment!'],
  ['id'=>'NAyVg-4YV7w','t'=>'v','tags'=>['pregnancy','pediatrics','testimonial'],'title'=>'Normal Delivery से डर लग रहा था | Patient Testimonial | Dr Ankita #sankalphospital #newbornbaby'],
  ['id'=>'ea0Uoi5Jg9E','t'=>'v','tags'=>['orthopedics','testimonial'],'title'=>'पैर बिल्कुल जाम था! | Knee Surgery Success Story, Patient Testimonial #sankalphospital #kneepain'],
  ['id'=>'K8jAVRTTcF8','t'=>'v','tags'=>['orthopedics'],'title'=>'Why Your Bone Surgery Failed! The Truth About Revision Surgery!'],
  ['id'=>'v4RS-5uWZ7g','t'=>'v','tags'=>['general'],'title'=>'Doctors Green Scrubs Kyun Pehente Hain? | The Science Behind OT Green Dress!'],
  ['id'=>'vujXi_JqJUw','t'=>'v','tags'=>['gynecology','laparoscopy'],'title'=>'Periods Ka Tez Dard Normal Nahi! Heavy Bleeding Ka Safe Treatment | Laparoscopy Solution!'],
  ['id'=>'vkUoA_Y2qr8','t'=>'v','tags'=>['pregnancy','pediatrics','testimonial'],'title'=>'Low Amniotic Fluid Pregnancy | Second Opinion Saved My Baby | Sankalp Hospital Testimonial'],
  ['id'=>'cWoQVLcywXs','t'=>'v','tags'=>['diabetes'],'title'=>'Diabetes Control Mein Hai? Kya Medicine Band Kar Sakte Hain? | Doctor’s Advice'],
  ['id'=>'p_eCsNRxaQA','t'=>'v','tags'=>['emergency','testimonial'],'title'=>'70 Saal Ka Critical Patient Ventilator Ke Bina Theek | ICU Success Story'],
  ['id'=>'4jTlMWPcwQQ','t'=>'v','tags'=>['neurosurgery'],'title'=>'Headache or Brain Tumor? | This Headache Mistake Could Be Deadly! | Sankalp Hospital'],
  ['id'=>'qFWJmUEfA0w','t'=>'v','tags'=>['neurosurgery'],'title'=>'सिरदर्द कब ब्रेन ट्यूमर की निशानी हो सकता है? | ये लक्षण नजरअंदाज न करें'],
  ['id'=>'wNRz-uJQfik','t'=>'v','tags'=>['pregnancy'],'title'=>'Pregnancy Ya Normal Delivery Plan Kar Rahe Hain? Ye Video Zaroor Dekhiye | Dr Ankita Goyal'],
  ['id'=>'F0pxxVv_82U','t'=>'v','tags'=>['dialysis'],'title'=>'Dr Ankita Goyal talk On Dialysis procedure at Sankalp Hospital'],
  ['id'=>'NYOm1TY85b0','t'=>'v','tags'=>['ivf'],'title'=>'Dr Lata Goyal talk on Infertility | Sankalp Hospital'],
  ['id'=>'8IWwkvV0Ir4','t'=>'v','tags'=>['gynecology','pregnancy'],'title'=>'Lower Pelvic Pain Is Common In Pregnancy | Dr. Ankita Goyal | Sankalp Hospital'],
  ['id'=>'Gi4w5BttvT4','t'=>'v','tags'=>['pregnancy'],'title'=>'Sleeping Positions In Pregnancy | How to sleep in pregnancy ? | प्रेगनेंसी में कैसे सोना चाहिए ?'],
  ['id'=>'FdjcvO43_EM','t'=>'v','tags'=>['dialysis'],'title'=>'Sankalp Unveils State-of-the-Art Dialysis Facility'],
  ['id'=>'m6nt-xC220g','t'=>'v','tags'=>['pediatrics','testimonial'],'title'=>'Happy Patients | Department of Pediatrics & Neonatologist'],
  ['id'=>'QvD-iLM4HWM','t'=>'v','tags'=>['gynecology','pediatrics'],'title'=>'बच्चेदानी को निकाला गया! डॉक्टर अंकिता गोयल ने सानकल्प हॉस्पिटल में'],
  ['id'=>'rA97Jf-4uOQ','t'=>'v','tags'=>['laparoscopy','testimonial'],'title'=>'Sankalp Hospital: Success Stories | Laparoscopy Treatment By Dr. Ankita Bansal Goyal'],
  ['id'=>'SJJELOG9jtY','t'=>'v','tags'=>['pregnancy','laparoscopy'],'title'=>'Life threatening Ruptured Ectopic Pregnancy treated by Laparoscopic surgery By Dr Ankita Goyal'],
  ['id'=>'gBUi0CpUs7s','t'=>'v','tags'=>['gynecology','laparoscopy','testimonial'],'title'=>'Treatment Of heavy bleeding through laparoscopy By Dr. Ankita Bansal Goyal |Sankalp Success Story'],
  ['id'=>'TGpBsLQzUNs','t'=>'v','tags'=>['orthopedics','testimonial'],'title'=>'Sankalp Success Story : Right thigh had  fracture that was broken in 12 pieces : Dr Tanay Goyal'],
  ['id'=>'NHDMhplYEpo','t'=>'v','tags'=>['pregnancy'],'title'=>'How to prepare yourself for Delivery? For All New Parents! Things to carry Hospital for Delivery?'],
  ['id'=>'Bn74olCgmWQ','t'=>'v','tags'=>['ivf'],'title'=>'what Is IVF? By Dr. Lata Goyal'],
  ['id'=>'0EP0egW9iiY','t'=>'v','tags'=>['ophthalmology'],'title'=>'What To Do Incase If Something Goes Inside Your Eye? By Dr. Akshaya Goyal.'],
  ['id'=>'wnEON5PqUY8','t'=>'v','tags'=>['emergency'],'title'=>'Sankalp Hospital Launching Of Smart ICU And Trauma Center In Collaboration With Cloudphysician.'],
  ['id'=>'WFjNpqRkD5s','t'=>'v','tags'=>['pediatrics'],'title'=>'Breastfeeding Tips And Care.by Dr. Manjusha Rajwade'],
  ['id'=>'M2AvqyhWHrQ','t'=>'v','tags'=>['gynecology'],'title'=>'tips on Vaginal Discharge.By Ankita Goyal.'],
  ['id'=>'_7QK59mFbsM','t'=>'v','tags'=>['pregnancy','orthopedics'],'title'=>'Backache Or Back Pain During pregnancy. By Ankita goyal.'],
  ['id'=>'z7G4f5MkoEc','t'=>'v','tags'=>['gynecology','laparoscopy','testimonial'],'title'=>'Treatment Of Fibroid through laparoscopy  By Dr. Ankita Bansal Goyal |Sankalp Success Story'],
  ['id'=>'gkqIhLD_xZE','t'=>'v','tags'=>['testimonial'],'title'=>'Patient Success Stories'],
  ['id'=>'YlWmjBfWd8s','t'=>'v','tags'=>['orthopedics'],'title'=>'Successful Treatment Of Fracture Of The Hip Bone.By Dr. Tanay Goyal'],
  ['id'=>'m-97lorKWo0','t'=>'v','tags'=>['emergency','testimonial'],'title'=>'Sankalp Hospital Emergency And Trauma Centre.Patient Care'],
  ['id'=>'7cZmPi4zdZk','t'=>'v','tags'=>['emergency'],'title'=>'Best Emergency Services | Smart ICU  |  Trauma & Smart ICU Ambikapur | First  Smart ICU Ambikapur'],
  ['id'=>'dnD1FYiNvsk','t'=>'v','tags'=>['emergency'],'title'=>'सरगुजा पुलिस परिवारों एवं फिट कॉप फिट सिटी पंजीकृत सदस्यों के लिए निशुल्क ओपीडीसंकल्प हॉस्पिटल'],
  ['id'=>'zzYA-ZBouQw','t'=>'v','tags'=>['emergency'],'title'=>'सरगुजा पुलिस परिवारों एवं फिट कॉप फिट सिटी पंजीकृत सदस्यों के लिए निशुल्क ओपीडीसंकल्प हॉस्पिटल'],
  ['id'=>'17zSg08khsE','t'=>'v','tags'=>['emergency'],'title'=>'संकल्प अस्पताल ,अंबिकापुर में इस क्षेत्र का सबसे एडवांस 24x7  स्मार्ट आईसीयू और ट्रॉमा सेंटर'],
  ['id'=>'jawsgdD5wVY','t'=>'v','tags'=>['gynecology','testimonial'],'title'=>'Patient Testimonial Treatment Of Uterus By Dr. Ankita Bansal Goyal'],
  ['id'=>'450bztWa6Bc','t'=>'v','tags'=>['ophthalmology','testimonial'],'title'=>'Testimonial - Dr LP Soni sir - #cataractsurgery at Sankalp Hospital by Dr. Akshaya Goyal #ambikapur'],
  ['id'=>'ePbNG2HWyNM','t'=>'v','tags'=>['gynecology','laparoscopy','testimonial'],'title'=>'Patient Testimonial For Fibroids Removal Laparoscopically By Dr. Ankita Bansal Goyal #ambikapur'],
  ['id'=>'sqoPysCAqQs','t'=>'v','tags'=>['ophthalmology'],'title'=>'Dr. Akshaya Goyal - Latest Advances In Cataract Treatment @Ambikapur #besteyedoctor'],
  ['id'=>'mQbiTnq4rAQ','t'=>'v','tags'=>['ophthalmology'],'title'=>'Injections In Eye Diseases With Dr. Akshaya Goyal (Ophthalmology) #diabeticretinopathy'],
  ['id'=>'UPhjTpkhXcE','t'=>'v','tags'=>['pregnancy','pediatrics','infection'],'title'=>'Dr. Lata Goyal Talks On COVID Vaccination During Pregnancy And Breast Feeding'],
  ['id'=>'f10lPzEw3yU','t'=>'v','tags'=>['ophthalmology','infection'],'title'=>'Dr. Akshaya Goyal Talks On Mucormycosis- The Black Fungus'],
  ['id'=>'VkQx6vBHFig','t'=>'v','tags'=>['ophthalmology'],'title'=>'The Next Generation Of #cataractsurgery Is Here..@ambikapur city'],
  ['id'=>'Aw_W-KtE6ZI','t'=>'v','tags'=>['gynecology'],'title'=>'Let\'s Talk #Periods Because It Matters! #ambikapur #bestgynaecologist'],
  ['id'=>'W3h7UzfnccU','t'=>'v','tags'=>['orthopedics'],'title'=>'Dr. Tanay Goyal Talks On Joint Pain And Arthritis'],
  ['id'=>'N3e7o-SB55E','t'=>'v','tags'=>['ophthalmology','testimonial'],'title'=>'Patient Testimonial #cataractsurgery'],
  ['id'=>'S3Y56zumSUo','t'=>'v','tags'=>['testimonial'],'title'=>'Patient Success stories'],
  ['id'=>'FeXtMX9miaE','t'=>'v','tags'=>['laparoscopy','testimonial'],'title'=>'Patient Success Stories #ambikapur #laparoscopicsurgery #DrAnkitaGoyal'],
  ['id'=>'Ja5kvlfFGvU','t'=>'v','tags'=>['gynecology','laparoscopy','testimonial'],'title'=>'Testimonial For Laparoscopic Total Hysterectomy Performed By Dr Ankita Goyal'],
  ['id'=>'dDLcTyMM25A','t'=>'v','tags'=>['general'],'title'=>'Sankalp Hospital Is Wishing Everyone A Healthy New Year!'],
  ['id'=>'1o7s6PG-8TE','t'=>'v','tags'=>['ivf','testimonial'],'title'=>'Patient  Success Stories #ambikapur #ivftreatment #besthospitalinchhattisgarh #sankalphospital'],
  ['id'=>'a0NZ288QgSY','t'=>'v','tags'=>['ophthalmology','diabetes'],'title'=>'Diabetic Disease of the eye   Dr Akshaya Goyal'],
  ['id'=>'6Qpi3E3x4ek','t'=>'v','tags'=>['orthopedics'],'title'=>'Dr  Tanay Goyal Ms Orthopaedics'],
  ['id'=>'zXa5l5YINd4','t'=>'v','tags'=>['orthopedics'],'title'=>'Presenting Dr. Tanay Goyal (Ms Orthopaedics)  Speaks About Back Ache You Are Facing.'],
  ['id'=>'_h08prbvgvU','t'=>'v','tags'=>['ophthalmology'],'title'=>'Dr. Akshaya Goyal #diabeticretinopathy #treatment  #sankalphospital Ambikapur city'],
  ['id'=>'o_ZBvVsyIiA','t'=>'v','tags'=>['ivf','testimonial'],'title'=>'IVF Patient Testimonial'],
  ['id'=>'HgKmRzQS3Iw','t'=>'v','tags'=>['gynecology','pregnancy'],'title'=>'Care in pregnancy - Experienced Obstetrician Dr. Lata Goyal with some special tips for all women!'],
  ['id'=>'FsoAW8z9OPg','t'=>'v','tags'=>['ophthalmology'],'title'=>'All You Need To Know About Cataract - All Questions Answered By Dr. Akshaya Goyal'],
  ['id'=>'a8_nJEsGDDM','t'=>'v','tags'=>['laparoscopy','testimonial'],'title'=>'Patient Testimonial For laparoscopic Surgery'],
  ['id'=>'8YE_y2YCcrg','t'=>'v','tags'=>['ivf'],'title'=>'Dr Lata Goyal (MS, Fertility Expert) Talks About Infertility On Facebook Live'],
  ['id'=>'f5-5efHAxeA','t'=>'v','tags'=>['ophthalmology','testimonial'],'title'=>'Happy Patient Testimonial after successful surgery! Get The Clear Vision With The Sankalp Hospital'],
  ['id'=>'sm12MYqUYOU','t'=>'v','tags'=>['ophthalmology'],'title'=>'Special Tips For Eye Care & Eye Hygiene'],
  ['id'=>'3MKriSDudtc','t'=>'v','tags'=>['ophthalmology'],'title'=>'Importance Of Eye Care & Eye Hygiene'],
  ['id'=>'Eqk0MSYqcOA','t'=>'v','tags'=>['ophthalmology','testimonial'],'title'=>'Patient Feedback for Trifocal IOL - GET RID OF GLASSES after Cataract Surgery @Ambikapur'],
  ['id'=>'MPJ10p8BjjQ','t'=>'v','tags'=>['laparoscopy'],'title'=>'Dr. Nilesh Goyal @ Sankalp Hospital, Ambikapur @ Benefits of Laparoscopy Surgery'],
  ['id'=>'H29X525Ngng','t'=>'v','tags'=>['pregnancy'],'title'=>'What to do in 1st trimester pregnancy? ||बेहद खास है Pregnancy के पहले 3 महीने || By Dr.Lata Goyal'],
  ['id'=>'8OSm3TSrsMI','t'=>'v','tags'=>['laparoscopy'],'title'=>'laparoscopy surgery and its benefits By Dr.Ankita Bansal Goyal  || Sankalp Hospital, Ambikapur'],
  ['id'=>'ipi_YjPeh84','t'=>'v','tags'=>['ophthalmology'],'title'=>'Advancements in Ophthalmology Department By Dr. Sanjay Goyal || Sankalp Hospital, Ambikapur'],
  ['id'=>'GUM0fDqjg4c','t'=>'v','tags'=>['ophthalmology'],'title'=>'Cataract surgery in young adults - Surgical pearls'],
  ['id'=>'GAMOQeh49tU','t'=>'v','tags'=>['infection'],'title'=>'Safety Precautions Taken  At Sankalp Hospital, Ambikapur During COVID-19 || By Dr Akshaya Goyal'],
  ['id'=>'QjtxBUglK4o','t'=>'v','tags'=>['pregnancy','infection'],'title'=>'Dr. Lata Goyal  Talks on Precautions Taken At Sankalp Hospital During Pregnancy & Delivery - COVID19'],
  ['id'=>'pyteCpBkiL8','t'=>'v','tags'=>['ophthalmology'],'title'=>'Dr Akshaya Goyal @ Sankalp Hospital, Ambikapur Talks On "How To Reduce Eye Strain"'],
  ['id'=>'FVbFdXikM70','t'=>'v','tags'=>['ophthalmology'],'title'=>'What is IOL? - Dr Akshaya Goyal Talks About Artificial Lenses Used in Cataract Surgery (Hindi Audio)'],
  ['id'=>'9TTzKsdIWRA','t'=>'v','tags'=>['pregnancy'],'title'=>'Dr Lata Goyal @ Sankalp Hospital, Ambikapur @ Talks On Precautions During Pregnancy'],
  ['id'=>'0jjVTCMab7g','t'=>'v','tags'=>['ophthalmology'],'title'=>'What is cataract? Dr Akshaya Goyal - Talks About Cataract & it\'s symptoms (मोतियाबिंद) (Hindi Audio)'],
  ['id'=>'lFV9-cK-dVA','t'=>'v','tags'=>['ophthalmology'],'title'=>'How to Take Care of Eyes in Summers By Dr Akshaya Goyal @ Sankalp Hospital , Ambikapur'],
  ['id'=>'8RCFdtlr2BY','t'=>'v','tags'=>['ophthalmology'],'title'=>'Advanced Cataract Surgery - Multifocal IOL #ambikapur #cataractsurgery #DrAkshayaGoyal'],
  ['id'=>'fsPdJchIl6A','t'=>'v','tags'=>['ophthalmology'],'title'=>'Advanced Cataract Surgery - Multifocal IOL ||Sankalp Hospital, Ambikapur'],
  ['id'=>'nW6etqnTKHA','t'=>'v','tags'=>['infection'],'title'=>'Dr.Lata Goyal Talks About Corona Virus || Sankalp Hospital Ambikapur'],
  ['id'=>'v4c51_99LiE','t'=>'v','tags'=>['laparoscopy'],'title'=>'Advanced Laparoscopy Surgery @ Sankalp Hospital Ambikapur'],
  ['id'=>'r5hNS7o6h7c','t'=>'v','tags'=>['laparoscopy'],'title'=>'Advanced Laparoscopic Surgery @ Sankalp Hospital, Ambikapur'],
  ['id'=>'FCHuhS2jRBo','t'=>'s','tags'=>['pregnancy'],'title'=>'Pregnancy में ये 4 Scans Miss किए तो हो सकती है बड़ी गलती! | Dr Ankita Bansal Goyal'],
  ['id'=>'7IWkZOo4OQg','t'=>'s','tags'=>['gynecology','ivf','pediatrics'],'title'=>'क्या बिना बच्चेदानी के भी माँ बनना संभव है | Fertility Options Explained | Dr Ankita'],
  ['id'=>'ExDkXYWqb6Y','t'=>'s','tags'=>['pregnancy'],'title'=>'July-August में Pregnant हैं? | क्या आप Rainy Season में Pregnant हैं? | Dr Ankita Goyal'],
  ['id'=>'6rglaNdpgOQ','t'=>'s','tags'=>['gynecology'],'title'=>'Periods Pain का असली कारण क्या है? | Period Cramps | Period pain'],
  ['id'=>'OIDpfN5MAMQ','t'=>'s','tags'=>['diabetes'],'title'=>'क्या Diabetes का Permanent इलाज संभव है? | Diabetes Cure Myth Explained | Dr Akshay Gupta'],
  ['id'=>'ji6gP_XCXNU','t'=>'s','tags'=>['japa'],'title'=>'क्या आप आज भी दूसरों पर निर्भर हैं? | Japa Saathi Training Program | Women Empowerment'],
  ['id'=>'4nFvnFE-i5M','t'=>'s','tags'=>['gynecology'],'title'=>'Periods Irregular, White Discharge, Pelvic Pain? | महिलाओं को ये Symptoms क्यों होते हैं?| Dr Ankita'],
  ['id'=>'SCwQZQAMaJA','t'=>'s','tags'=>['orthopedics'],'title'=>'घुटनों में दर्द क्यों बढ़ता है? | 3 बड़ी गलतियां जो Knee Pain को कर सकती हैं गंभीर | Dr. Tanay Goyal'],
  ['id'=>'vrtZB0dV3XA','t'=>'s','tags'=>['gynecology'],'title'=>'Periods आते ही बहुत Bleeding होती है? | Rashes & Infections During Periods Explained | Dr Ankita'],
  ['id'=>'7vRCoe9yOr4','t'=>'s','tags'=>['general','testimonial'],'title'=>'A Happy Doctor Means Better Care ❤️ | Life at Sankalp Hospital'],
  ['id'=>'4QDqdaCpZsE','t'=>'s','tags'=>['pediatrics'],'title'=>'घर आते ही Newborn के साथ ये 5 गलतियाँ बिल्कुल न करे ! Dr Megha Goyal'],
  ['id'=>'MONbizC-3_Q','t'=>'s','tags'=>['pediatrics'],'title'=>'सिर्फ एक Scan नहीं करवाया और Baby Heart Disease के साथ पैदा हुआ! | Dr Megha Goyal'],
  ['id'=>'hlzCn13eeek','t'=>'s','tags'=>['general','heart'],'title'=>'रोज़ 1 घंटा पैदल चलने से क्या होता है? | Walking Benefits Timeline | Health Tips by Doctor'],
  ['id'=>'HQ7JiyX5Jpc','t'=>'s','tags'=>['pregnancy','ivf'],'title'=>'IUI Procedure in Hindi Explained | IUI vs IVF | Pregnancy Treatment'],
  ['id'=>'wCS4XYjRgrY','t'=>'s','tags'=>['general','heart'],'title'=>'शरीर के अंग कब कमजोर होने लगते हैं?  | Heart, Kidney, Liver Damage के Hidden Reasons'],
  ['id'=>'VgBVAieC1rk','t'=>'s','tags'=>['general'],'title'=>'inside the OT  #trending #shorts'],
  ['id'=>'-x7JmHQStF4','t'=>'s','tags'=>['diabetes'],'title'=>'डायबिटीज में गुड़ खाना चाहिए या नहीं ? #sankalphospital #shorts'],
  ['id'=>'D0NGyy-CFgM','t'=>'s','tags'=>['japa'],'title'=>'Sankalp Health Foundation के Japa Saathi Training Program #shorts'],
  ['id'=>'VbPPVThd7u4','t'=>'s','tags'=>['diabetes'],'title'=>'Diabetes में कौन से Fruits खा सकते हैं? | Low Glycemic Index Fruits Explained'],
  ['id'=>'h0Wq0yCY5_4','t'=>'s','tags'=>['pregnancy','pediatrics'],'title'=>'क्या गर्भ के अंदर बच्चा रोता है  | Kya pet me baby Rota hai #shorts #babycare'],
  ['id'=>'AZdpkwSkdO0','t'=>'s','tags'=>['orthopedics','pediatrics'],'title'=>'Newborn Baby\'s Collarbone Fracture: Don\'t Panic, Clavicle Fracture Explained! Dr Megha Goyal'],
  ['id'=>'L-mWtJRG2qI','t'=>'s','tags'=>['ivf'],'title'=>'IVF में 100% सफलता कैसे पाये? | How To Get 100% IVF Success #ivf #sankalphospital'],
  ['id'=>'ifcBEiTBfLg','t'=>'s','tags'=>['ivf'],'title'=>'Inside the IVF lab: Embryo development process in IVF #embryologist #ivf #ivfprocess'],
  ['id'=>'HnUKg2IT0R0','t'=>'s','tags'=>['japa'],'title'=>'महिलाओं के लिए सुनहरा मौका | Japa Maid Training & Placement Program'],
  ['id'=>'Q6T1DQg_pIU','t'=>'s','tags'=>['pregnancy'],'title'=>'C-Section में दर्द होता है क्या? | Spinal Anesthesia Truth | c section ambikapur'],
  ['id'=>'uYhXAsenbDI','t'=>'s','tags'=>['pregnancy'],'title'=>'C-Section डिलीवरी के बाद किन बातों का ध्यान रखना चाहिए? | Care after C-Section Delivery'],
  ['id'=>'__KAYn_cHIQ','t'=>'s','tags'=>['pediatrics'],'title'=>'मोटा बच्चा ही Healthy होता है? | Chubby Baby vs Healthy Baby'],
  ['id'=>'uIBG7-OjGeA','t'=>'s','tags'=>['infection'],'title'=>'Fungal infection on skin | Fungal infection in private parts #viral #infection'],
  ['id'=>'Ws0eNue3Sz8','t'=>'s','tags'=>['orthopedics','testimonial'],'title'=>'Knee Surgery Success Story | Orthopaedic Success Story!'],
  ['id'=>'0kkYJh3xFZQ','t'=>'s','tags'=>['pediatrics'],'title'=>'बच्चे के खाने को Rating देंगे !  Dr Megha Goyal | chhattisgarh ambikapur'],
  ['id'=>'1pS1mi029CA','t'=>'s','tags'=>['gynecology','pregnancy','emergency'],'title'=>'First Night, Bani Emergency Post-Coital Tear | Dr Ankita Goyal #pregnant #hospital'],
  ['id'=>'TgJbliiQgqE','t'=>'s','tags'=>['pregnancy'],'title'=>'C-Section का सच क्या है?'],
  ['id'=>'LGwfDQg8f2s','t'=>'s','tags'=>['orthopedics'],'title'=>'दर्द मुक्त चलना कैसे? Femoral Head के जरिए! #hipreplacement #treatment'],
  ['id'=>'kXbeVm_sP54','t'=>'s','tags'=>['orthopedics'],'title'=>'हड्डियों से कट-कट की आवाज़ क्यों आती है? | 5 Foods & Exercises for Strong Bones & Joints!'],
  ['id'=>'gNmqIeT0oXA','t'=>'s','tags'=>['pediatrics'],'title'=>'गर्मी में बच्चों को क्या खिलाएं क्यों? | Top 10 Cooling Foods for Kids & Babies! Dr Megha Goyal!'],
  ['id'=>'HlNtNofUsYI','t'=>'s','tags'=>['orthopedics'],'title'=>'हड्डियां कमजोर क्यों होती हैं? | 5 Secrets for Strong Bones, Calcium, Vitamin D, Exercise #ortho'],
  ['id'=>'FgRHaIIAR0o','t'=>'s','tags'=>['ophthalmology'],'title'=>'आंखों की सर्जरी के बाद क्या करें? क्यों जरूरी है ये Care | Post Eye Surgery Care Tips! #shortsfeed'],
  ['id'=>'QRL32hdOCf0','t'=>'s','tags'=>['ivf','pediatrics'],'title'=>'2 साल से Baby नहीं हो रहा? IVF vs ICSI सच क्या है | Infertility Treatment Explained!'],
  ['id'=>'-SW_HuwdT4Q','t'=>'s','tags'=>['pregnancy'],'title'=>'जो Doctor खुद माँ हो, वो दर्द समझती है ! | Doctor Mom Life, Pregnancy Care, Emotional Story! #shorts'],
  ['id'=>'Fz8VW9Asipo','t'=>'s','tags'=>['orthopedics'],'title'=>'Best Orthopaedic Surgeon In Ambikapur #shortsfeed #shorts'],
  ['id'=>'3tAYE8qpmEM','t'=>'s','tags'=>['pediatrics'],'title'=>'बच्चे की आँखें और skin पीली क्यों होती हैं? | Neonatal Jaundice Treatment! #shorts #shortsfeed'],
  ['id'=>'cF4lUgK0u2g','t'=>'s','tags'=>['pediatrics'],'title'=>'बच्चों के Cartoons Safe हैं या Harmful? #shortsfeed'],
  ['id'=>'v6gbSW3BSUM','t'=>'s','tags'=>['orthopedics'],'title'=>'हड्डी की surgery इतनी delicate क्यों होती है? | Best Orthopaedic Surgeon #shortsfeed #orthopedics'],
  ['id'=>'Ep91sUkwUTI','t'=>'s','tags'=>['pediatrics'],'title'=>'रात में Formula Milk देने से Infection क्यों? #babycare #sankalphospital #newborncare'],
  ['id'=>'4OBzyIhA4z4','t'=>'s','tags'=>['infection','gastro'],'title'=>'अंबिकापुर के पानी में E. Coli क्यों? | Stomach Infection, दस्त और पेट दर्द से कैसे बचें?'],
  ['id'=>'pnmBctdyJy8','t'=>'s','tags'=>['infection','gastro'],'title'=>'पेट दर्द, गैस और सूजन? हो सकता है H. Pylori Infection!'],
  ['id'=>'4hoOl4NEHHE','t'=>'s','tags'=>['gynecology','laparoscopy','gastro'],'title'=>'रोज पेट दर्द और Heavy Periods? Ignore मत करें | Laparoscopy Safe है क्या? #sankalphospital'],
  ['id'=>'64ITmD8jA-A','t'=>'s','tags'=>['orthopedics'],'title'=>'Femur Bone Se Kya Nikala? | Nail Removal Surgery by Orthopedic Surgeon in Ambikapur!'],
  ['id'=>'7RvKY0U5srw','t'=>'s','tags'=>['pregnancy'],'title'=>'क्या Pregnancy Mein Delay? 3 Common Galtiyan Couples Karte Hain! #FertilityTips'],
  ['id'=>'u7U01lDOUcY','t'=>'s','tags'=>['ivf','pediatrics','testimonial'],'title'=>'IVF Success Story की Pure Joy Profession से बढ़कर एक एहसास!! #shortsfeed #sankalphospital #babycare'],
  ['id'=>'m_chFDlVwwc','t'=>'s','tags'=>['pregnancy','pediatrics'],'title'=>'क्या ultrasound report में लिखा होता है baby boy या girl? #pregnancyfacts #sankalphospital #babycare'],
  ['id'=>'SOhhXLp8H5k','t'=>'s','tags'=>['pediatrics'],'title'=>'Never Kiss a Baby on Face 😱 | Baby Infection Risk | Newborn Care Tips | Dr. Ankita Bansal Goyal'],
  ['id'=>'FHkYHYuXjec','t'=>'s','tags'=>['orthopedics'],'title'=>'Best Orthopaedic Surgeon | Orthopaedic OT Scene #shortsfeed #orthopedics'],
  ['id'=>'-yaJ4tSzDJA','t'=>'s','tags'=>['general'],'title'=>'Delhi Mumbai Jaane Ki Zarurat Nahi! | Ambikapur Me Milegi Big City Treatment | Sankalp Hospital”'],
  ['id'=>'4dfvavi1LpM','t'=>'s','tags'=>['orthopedics'],'title'=>'Patient Knee Recovery | Sankalp Hospital #shortsfeed #shorts'],
  ['id'=>'kjLYJnn6DPc','t'=>'s','tags'=>['infection'],'title'=>'Nipah Virus SE Bachne Ke Liye 3 SIMPLE Steps | Nipah Virus Se Kaise Bache? #shortsfeed #shorts'],
  ['id'=>'dt5Cr2qIpdo','t'=>'s','tags'=>['pediatrics'],'title'=>'Baby Ke Sir Ke Neeche Takiya Lagana Sahi Hai? | Is Pillow Safe for Newborn Baby? | Dr Ankita Goyal'],
  ['id'=>'JndXJs7O54U','t'=>'s','tags'=>['orthopedics','testimonial'],'title'=>'Tedha Paon Ka Ilaj: Foot Deformity Correction Surgery (Success Story) #shortsfeed'],
  ['id'=>'QKbYLYpydy4','t'=>'s','tags'=>['pediatrics'],'title'=>'Mobile Phone Exposure in Newborns | Hidden Risks Parents Must Know #shorts #bornbaby'],
  ['id'=>'pIEI8x3GDMQ','t'=>'s','tags'=>['neurosurgery','emergency','testimonial'],'title'=>'Unconscious से चलने तक  सिर्फ 6 दिनों में | Head Injury Recovery Story | Sankalp Hospital Ambikapur'],
  ['id'=>'cw51GnlCSYo','t'=>'s','tags'=>['neurosurgery','emergency'],'title'=>'How to Handle Polytrauma Patients 🚑 | Life-Saving Tips by Neurosurgeon'],
  ['id'=>'hzJFhmikOAo','t'=>'s','tags'=>['neurosurgery'],'title'=>'सर दर्द में MRI कब कराना ज़रूरी है? | Red Flag Headache Symptoms Explained'],
  ['id'=>'XTGyVhh2HlE','t'=>'s','tags'=>['neurosurgery'],'title'=>'सिरदर्द कब Brain Tumor का संकेत हो सकता है? Headache vs Brain Tumor Explained | MRI Kab Karaye?'],
  ['id'=>'RkABPcZH_JE','t'=>'s','tags'=>['orthopedics'],'title'=>'हड्डी से बदबू क्यों आती है? | Bone Infection (Osteomyelitis) के लक्षण और इलाज'],
  ['id'=>'6eZIASuV8eE','t'=>'s','tags'=>['ivf'],'title'=>'Dr Lata Goyal Talk On What is Infertility | Sankalp Hospital'],
  ['id'=>'2RhzNoj0XTo','t'=>'s','tags'=>['pregnancy'],'title'=>'Dr. Ankita Goyal talks on Ectopic Pregnancy | Sankalp Hospital'],
  ['id'=>'dXMDFOYuBKA','t'=>'s','tags'=>['dialysis'],'title'=>'Dialysis Services At Sankalp Hospital'],
  ['id'=>'oG_BsBBBrus','t'=>'s','tags'=>['general'],'title'=>'E Consultation only at 100Rs | Sankalp Hospital'],
  ['id'=>'1m-ax65NnzU','t'=>'s','tags'=>['orthopedics','cancer'],'title'=>'Exercise & Healthy bones your shield against Cancer | Sankalp Hospital'],
  ['id'=>'Z4ShpGIU5zc','t'=>'s','tags'=>['emergency','testimonial'],'title'=>'Patient Testimonial | Smart ICU  Sankalp Hospital, Ambikapur | Success Stories'],
  ['id'=>'a49x59ezs5A','t'=>'s','tags'=>['gynecology'],'title'=>'Causes Of Irregular Periods'],
  ['id'=>'4lhg5z-3iYo','t'=>'s','tags'=>['general'],'title'=>'Benefits'],
  ['id'=>'HBDBX6GkvvY','t'=>'s','tags'=>['gynecology'],'title'=>'Common Causes Of Pelvic Pain'],
  ['id'=>'vI4-3ECutWI','t'=>'s','tags'=>['orthopedics'],'title'=>'Tips To Prevent Back Pain'],
  ['id'=>'FBf-zY1XSLg','t'=>'s','tags'=>['orthopedics'],'title'=>'Subtrochanteric Femoral Fractures By Dr. Tanay Goyal'],
  ['id'=>'80dth3-eBDo','t'=>'s','tags'=>['orthopedics'],'title'=>'Treatment Of ACL Avulsion Fracture And Tibia Upper-End Fracture.By Dr. Tanay Goyal'],
  ['id'=>'B8m2_kDuCgQ','t'=>'s','tags'=>['general'],'title'=>'Sankalp Hospital,Ambikapur'],
  ['id'=>'d0waKSSjY5I','t'=>'s','tags'=>['orthopedics'],'title'=>'6-Month-Old Hip Fracture Is Done By Dr. Tanay Goyal.'],
  ['id'=>'opQc8w1ao6U','t'=>'s','tags'=>['testimonial'],'title'=>'Patient Testimonail.'],
  ['id'=>'bpv6q5HvY4k','t'=>'s','tags'=>['general'],'title'=>'Happy Dussehra | Vijaya Dashami | Dussehra Special | Ram | Ravan | Hanuman Ji'],
  ['id'=>'IssLvRrpMzc','t'=>'s','tags'=>['gynecology'],'title'=>'Common Causes Of Pelvic Pain'],
  ['id'=>'3TECfqNQOtk','t'=>'s','tags'=>['orthopedics'],'title'=>'Food To Avoid If You Have Joint Pain'],
  ['id'=>'j3OLELLBKw8','t'=>'s','tags'=>['gynecology','cancer'],'title'=>'Symptoms Of Ovarian Cancer'],
  ['id'=>'FMmYpPDcwbU','t'=>'s','tags'=>['pregnancy','orthopedics'],'title'=>'Here\'s How To Prevent Leg Cramps During Pregnancy'],
  ['id'=>'awlE_2YRxKQ','t'=>'s','tags'=>['pregnancy'],'title'=>'Food to eat during pregnancy'],
  ['id'=>'2iE3lYgh1TU','t'=>'s','tags'=>['pregnancy'],'title'=>'Yoga During Pregnancy'],
  ['id'=>'4s372OB7p1U','t'=>'s','tags'=>['orthopedics'],'title'=>'Dr. Tanay Goyal Talks On Neck Pain & How To Cure It By Home Remedies'],
  ['id'=>'GeZBRJk3O0o','t'=>'s','tags'=>['ophthalmology'],'title'=>'Healthy Eye Tips'],
  ['id'=>'xbdUaSFh_o0','t'=>'s','tags'=>['gynecology'],'title'=>'Tips To Cure PCOS'],
  ['id'=>'FCqwXHptOog','t'=>'s','tags'=>['general'],'title'=>'Tips For Healthy And Happy Mom'],
  ['id'=>'CtcgTfcncRA','t'=>'s','tags'=>['ivf'],'title'=>'Do\'s And Don\'t During IVF'],
  ['id'=>'-U_FvYdGJm8','t'=>'s','tags'=>['ophthalmology'],'title'=>'Self-Care Tips To Prevent Vision Loss From Glaucoma'],
  ['id'=>'kqcO0p-ptsE','t'=>'s','tags'=>['general'],'title'=>'Sankalp Hospital Wishes Everyone Merry Christmas!'],
  ];
  return $v;
}

/**
 * Return up to $limit videos matching ANY tag in $cats.
 * $longOnly=true prefers full videos, backfilling with Shorts only if needed.
 */
function sankalp_videos_by_cat($cats, $limit = 3, $longOnly = true) {
  $cats = (array)$cats;
  $out = []; $seen = [];
  $pick = function($wantLong) use ($cats, $limit, &$out, &$seen) {
    foreach (sankalp_all_videos() as $vid) {
      if (count($out) >= $limit) return;
      $isLong = ($vid['t'] === 'v');
      if ($wantLong !== $isLong) continue;
      if (isset($seen[$vid['id']])) continue;
      if (array_intersect($cats, $vid['tags'])) { $out[] = $vid; $seen[$vid['id']] = 1; }
    }
  };
  if ($longOnly) { $pick(true); $pick(false); }
  else { $pick(true); $pick(false); }
  return array_slice($out, 0, $limit);
}

/**
 * A diverse, curated set for homepage / teaser strips: one long-form video per
 * major topic (in a sensible order), then filled with more long-form videos.
 */
function sankalp_featured_videos($limit = 8) {
  $order = ['gynecology','orthopedics','ivf','pediatrics','ophthalmology','emergency','neurosurgery','laparoscopy','dialysis','diabetes'];
  $out = []; $seen = [];
  foreach ($order as $t) {
    if (count($out) >= $limit) break;
    foreach (sankalp_all_videos() as $v) {
      if ($v['t'] !== 'v' || isset($seen[$v['id']])) continue;
      if (in_array($t, $v['tags'], true)) { $out[] = $v; $seen[$v['id']] = 1; break; }
    }
  }
  if (count($out) < $limit) {
    foreach (sankalp_all_videos() as $v) {
      if (count($out) >= $limit) break;
      if ($v['t'] !== 'v' || isset($seen[$v['id']])) continue;
      $out[] = $v; $seen[$v['id']] = 1;
    }
  }
  return array_slice($out, 0, $limit);
}

/** One responsive click-to-play card (YouTube facade — good for page speed). */
function sankalp_video_facade($id, $title = '') {
  $id = htmlspecialchars($id, ENT_QUOTES);
  $t  = htmlspecialchars($title, ENT_QUOTES);
  return '<div class="sk-vid" data-id="' . $id . '">'
       . '<img class="sk-vid-thumb" src="https://i.ytimg.com/vi/' . $id . '/hqdefault.jpg" '
       . 'alt="' . $t . '" loading="lazy" width="480" height="360">'
       . '<button type="button" class="sk-vid-play" aria-label="Play video" '
       . 'onclick="skVidPlay(this.parentNode)"><i class="fas fa-play"></i></button>'
       . ($title !== '' ? '<span class="sk-vid-cap">' . $t . '</span>' : '')
       . '</div>';
}

/** CSS + JS for the facades — emitted only once per request. */
function sankalp_video_assets() {
  static $done = false;
  if ($done) return '';
  $done = true;
  return <<<'HTML'
<style>
.sk-vid-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;}
.sk-vid{position:relative;border-radius:16px;overflow:hidden;cursor:pointer;background:#0b1220;
  box-shadow:0 10px 30px rgba(0,0,0,0.10);aspect-ratio:16/9;}
.sk-vid-thumb{width:100%;height:100%;object-fit:cover;display:block;transition:transform .4s ease,filter .3s ease;}
.sk-vid:hover .sk-vid-thumb{transform:scale(1.06);filter:brightness(.82);}
.sk-vid-play{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
  width:58px;height:58px;border-radius:50%;border:none;cursor:pointer;
  background:rgba(225,29,72,0.94);color:#fff;font-size:1.25rem;
  display:flex;align-items:center;justify-content:center;
  box-shadow:0 6px 18px rgba(225,29,72,0.45);transition:transform .25s ease,background .25s ease;}
.sk-vid:hover .sk-vid-play{transform:translate(-50%,-50%) scale(1.12);background:#e11d48;}
.sk-vid-cap{position:absolute;left:0;right:0;bottom:0;padding:26px 14px 12px;
  font-size:0.82rem;font-weight:600;color:#fff;line-height:1.4;
  background:linear-gradient(0deg,rgba(0,0,0,0.85) 0%,transparent 100%);
  display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;}
.sk-vid iframe{position:absolute;inset:0;width:100%;height:100%;border:0;}
.sk-vid-badge{display:inline-flex;align-items:center;gap:7px;font-size:0.68rem;font-weight:700;
  letter-spacing:0.14em;text-transform:uppercase;padding:6px 14px;border-radius:50px;margin-bottom:14px;}
</style>
<script>
function skVidPlay(el){
  var id=el.getAttribute('data-id');
  el.innerHTML='<iframe src="https://www.youtube.com/embed/'+id+'?autoplay=1&rel=0&playsinline=1" '
    +'title="Sankalp Hospital video" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture" '
    +'allowfullscreen></iframe>';
}
</script>
HTML;
}

/**
 * Map a blog post's category + slug to relevant video tags (for on-post embedding).
 * Handles English categories and transliterated / Hindi slugs.
 */
function sankalp_blog_video_cats($category = '', $slug = '') {
  $hay = strtolower($category) . ' ' . str_replace('-', ' ', strtolower($slug));
  // Kidney/urology check runs on a copy with "neuro*" stripped, because the word
  // "neurology" literally contains the substring "urology" (false positive).
  $uhay = str_replace(['neurological','neurology','neuro'], ' ', $hay);
  $tags = [];
  $add = function($t) use (&$tags) { foreach ((array)$t as $x) if (!in_array($x, $tags, true)) $tags[] = $x; };
  $has = function($needles) use ($hay) { foreach ((array)$needles as $n) if ($n !== '' && strpos($hay, $n) !== false) return true; return false; };

  if ($has(['orthop','joint','bone','fracture','ghutno','knee','jodon','kamar','cervical','shoulder','acl','edi me','nas chadhna','jhunjhuni','arthritis','back exercise'])) $add('orthopedics');
  if ($has(['ivf','fertil','infertil'])) $add('ivf');
  if ($has(['pregnan','garbh','delivery','trimester','obstet','matern'])) $add('pregnancy');
  // gynecology: rely on specific women's-health terms, NOT the bare word "women"
  // (which over-matches thyroid/kidney/ptsd/hiv "…-in-women" posts).
  if ($has(['gynec','uterus','pcos','period','menstru','ovarian','pelvic','abdominal pain','intercourse','vaginal','discharge','fibroid','hormonal imbalance','hormonal'])) $add('gynecology');
  if ($has(['pediatr','child','newborn','neonat','vaccin','baby'])) $add('pediatrics');
  if ($has(['ophthal','eye','vision','cataract','aankh','aankho'])) $add('ophthalmology');
  if ($has(['neuro','headache','migraine','brain','chakkar','sar dard','sir dard'])) $add('neurosurgery');
  foreach (['urolog','nephro','kidney','peshab',' stone','dialysis','urinary'] as $n) { if (strpos($uhay, $n) !== false) { $add(['urology','dialysis']); break; } }
  if ($has(['diabet','moringa','sugar','insulin'])) $add('diabetes');
  if ($has(['onco','cancer','tumor'])) $add('cancer');
  if ($has(['laparoscop','laproscop','hernia','gallbladder','appendic','acidity','khatti','dakar','h pylori','stomach','pet me'])) $add(['laparoscopy','gastro']);
  if ($has(['icu','trauma','ventilator','accident','emergency'])) $add('emergency');
  if ($has(['cardio','heart','hriday','cardiac','bp high','low bp','yawning'])) $add('heart');
  return $tags;
}

/**
 * Echo a full "Related Videos" section.
 * $opts: heading, sub, limit, longOnly, accent (hex), bg ('white'|'light'|''), badge
 */
function sankalp_video_section($cats, $opts = []) {
  $videos = sankalp_videos_by_cat($cats, $opts['limit'] ?? 3, $opts['longOnly'] ?? true);
  if (!$videos) return;
  $accent  = $opts['accent']  ?? '#0f5cad';
  $heading = $opts['heading'] ?? 'Watch: Doctor Videos';
  $sub     = $opts['sub']     ?? 'Health tips, treatment explainers and patient stories from our specialists.';
  $badge   = $opts['badge']   ?? 'Video Library';
  $pad     = $opts['pad']     ?? '64px 0';
  $bg      = $opts['bg']      ?? '';
  echo sankalp_video_assets();
  $style = $bg ? "background:$bg;" : '';
  echo '<section class="sk-video-section" style="padding:' . $pad . ';' . $style . '">';
  echo '<div class="container">';
  echo '<div class="sk-vid-badge" style="background:' . $accent . '18;color:' . $accent . ';">'
     . '<i class="fab fa-youtube"></i> ' . htmlspecialchars($badge) . '</div>';
  echo '<h2 style="font-size:clamp(1.6rem,4vw,2.4rem);font-weight:800;letter-spacing:-0.03em;color:#12263f;margin:0 0 8px;">'
     . htmlspecialchars($heading) . '</h2>';
  echo '<p style="color:#5b6b7f;max-width:620px;margin:0 0 30px;line-height:1.7;">' . htmlspecialchars($sub) . '</p>';
  echo '<div class="sk-vid-grid">';
  foreach ($videos as $v) echo sankalp_video_facade($v['id'], $v['title']);
  echo '</div>';
  echo '<div style="margin-top:26px;">'
     . '<a href="' . sankalp_channel_url() . '" target="_blank" rel="noopener" '
     . 'style="display:inline-flex;align-items:center;gap:9px;font-weight:700;text-decoration:none;'
     . 'padding:12px 26px;border-radius:50px;background:' . $accent . ';color:#fff;">'
     . '<i class="fab fa-youtube"></i> More videos on YouTube</a>'
     . ' <a href="/video-gallery" style="display:inline-flex;align-items:center;gap:8px;font-weight:700;'
     . 'text-decoration:none;color:' . $accent . ';padding:12px 18px;">Video Gallery <i class="fas fa-arrow-right"></i></a>';
  echo '</div>';
  echo '</div></section>';
}

}
