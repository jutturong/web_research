<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
            var  $title="ศูนย์วิจัยผู้ป่วยปากแหว่ง เพดานโหว่ฯ มหาวิทยาลัยขอนแก่น";
	public function index()  //หน้าหลัก
	{


                                $data["title"]=$this->title;
                                

                                $data["file1"]="main_slide";
                                
                                  //$data["head_content1"]="หน้าหลัก";
                                //<img src=\"".base_url()."images/location.png\" class=\"icon\">
                                   $data["head_content1"]= "    <h5><strong><b> <span class=\"icon mif-share\"></span>  ข่าวสารศูนย์วิจัย </b></strong></h5>";
                                    $data["head_content1"]  .=  "<br> ";
                                //   $data["head_content1"]= "<h6><strong><b></b></strong></h6>";
                                   
                                   //ข่าวประชาสัมพันธ์ ขอเชิญชวนนักวิจัยส่งบทความตีพิมพ์ลงวารสารจดหมายเหตุการแพทย์ (จพสท.) ฉบับเดือนสิงหาคม 2560 โดยศูนย์วิจัยผู้ป่วยปากแหว่งเพดานโหว่ฯ 
                                  
                                   $data["head_content1"] .= "<strong><b><img src=\"".base_url()."images/location.png\" class=\"icon\">  ข่าวประชาสัมพันธ์ ขอเชิญชวนนักวิจัยส่งบทความตีพิมพ์ลงวารสารจดหมายเหตุการแพทย์ (จพสท.) ฉบับเดือนสิงหาคม 2560 โดยศูนย์วิจัยผู้ป่วยปากแหว่งเพดานโหว่ฯ</b></strong>";
                                   
                                     $data["head_content1"] .= "<br>";
                                     
                                    $data["head_content1"] .=   "<button class=\"button\"   class=\"button loading-cube\"   onclick=\"javascript:  window.open('http://kkucleft.kku.ac.th/word/pr_cleftcenter2560.pdf');    \"  ><span class=\"icon mif-share\"></span>  Readmore </button>";

                                    
                                    
                                    
                                    
                                   
                                  $data["head_content1"] .="<br><br>";
                                   //ข่าวประชาสัมพันธ์สรุปผลการดำเนินงานประชุม THAICleft 2015 หรือ www.thaicleft2015.org
                                 $data["head_content1"] .= "<strong><b> <img src=\"".base_url()."images/location.png\" class=\"icon\"> ข่าวประชาสัมพันธ์สรุปผลการดำเนินงานประชุม THAICleft 2015 หรือ www.thaicleft2015.org </b></strong>" ;
                                  $data["head_content1"] .="<br>";
                                 $data["head_content1"] .=   "<button class=\"button\"   class=\"button loading-cube\"   onclick=\"javascript:  window.open('http://kkucleft.kku.ac.th/research/word/THAICleft2015.doc');    \"  ><span class=\"icon mif-share\"></span>  Readmore </button>";
                                  
                                 
                                 //ขอเชิญชวนนักวิจัยส่งบทความเพื่อตีพิมพ์ในวารสารจดหมายเหตุทางแพทย์ (จพสท.) ฉบับ พ.ศ. 2559 
                                    $data["head_content1"] .="<br><br>";
                                    $data["head_content1"] .= "<strong><b> <img src=\"".base_url()."images/location.png\" class=\"icon\"> ขอเชิญชวนนักวิจัยส่งบทความเพื่อตีพิมพ์ในวารสารจดหมายเหตุทางแพทย์ (จพสท.) ฉบับ พ.ศ. 2559  </b></strong>" ;
                                  $data["head_content1"] .="<br>";
                                 $data["head_content1"] .=   "<button class=\"button\"   class=\"button loading-cube\"   onclick=\"javascript:  window.open('http://kkucleft.kku.ac.th/research/word/TFC_11-12-2559.pdf');    \"  ><span class=\"icon mif-share\"></span>  Readmore </button>";
                                  
                                
                                  //ขอเชิญชวนนักวิจัยส่งบทความเพื่อตีพิมพ์ในวารสารจดหมายเหตุทางแพทย์ (จพสท.) ฉบับ พ.ศ. 2559 
                                    $data["head_content1"] .="<br><br>";
                                    $data["head_content1"] .= "<strong><b> <img src=\"".base_url()."images/location.png\" class=\"icon\"> ภาพงานประชุมวิชาการครั้งที่ 29 ประจำปี 2556 Pre-congress Encephalocele :Surgical Outcome  </b></strong>" ;
                                  $data["head_content1"] .="<br>";
                                 $data["head_content1"] .=   "<button class=\"button\"   class=\"button loading-cube\"   onclick=\"javascript:  window.open('http://kkucleft.kku.ac.th/research/word/pre-congress2556.pdf');    \"  ><span class=\"icon mif-share\"></span>  Readmore </button>";
                                
                                 
                                 //ผลงานศูนย์วิจัยผู้ป่วยปากแหว่ง เพดานโหว่ฯ ได้รับรางวัล R2R ดีเด่น ประจำปี 2556 กลุ่มงานบริการระดับปฐมภูมิ ทุติยภูมิ ตติยภูมิ สนับสนุนบริการและ บริหาร และกลุ่มสิ่งประดิษฐ์ 
                                 
                                 $data["head_content1"] .="<br><br>";
                                    $data["head_content1"] .= "<strong><b> <img src=\"".base_url()."images/location.png\" class=\"icon\"> ผลงานศูนย์วิจัยผู้ป่วยปากแหว่ง เพดานโหว่ฯ ได้รับรางวัล R2R ดีเด่น ประจำปี 2556 กลุ่มงานบริการระดับปฐมภูมิ ทุติยภูมิ ตติยภูมิ สนับสนุนบริการและ บริหาร และกลุ่มสิ่งประดิษฐ์  </b></strong>" ;
                                  $data["head_content1"] .="<br>";
                                 $data["head_content1"] .=   "<button class=\"button\"   class=\"button loading-cube\"   onclick=\"javascript:  window.open('http://kkucleft.kku.ac.th/research/word/tawanchaiR2R2556.pdf');    \"  ><span class=\"icon mif-share\"></span>  Readmore </button>";
                                
                                 
                                 
                                 //หลักเกณฑ์และแนวทางปฏิบัติในการประเมินกลั่นกรองและจัดลำดับความสำคัญโครงการวิจัยที่เสนอขอรับทุนอุดหนุนการวิจัยประเภทอุดหนุนทั่วไปประจำปีงบประมาณ ของมหาวิทยาลัยขอนแก่น
                                 
                                  $data["head_content1"] .="<br><br>";
                                    $data["head_content1"] .= "<strong><b> <img src=\"".base_url()."images/location.png\" class=\"icon\"> หลักเกณฑ์และแนวทางปฏิบัติในการประเมินกลั่นกรองและจัดลำดับความสำคัญโครงการวิจัยที่เสนอขอรับทุนอุดหนุนการวิจัยประเภทอุดหนุนทั่วไปประจำปีงบประมาณ ของมหาวิทยาลัยขอนแก่น  </b></strong>" ;
                                  $data["head_content1"] .="<br>";
                                 $data["head_content1"] .=   "<button class=\"button\"   class=\"button loading-cube\"   onclick=\"javascript:  window.open('http://kkucleft.kku.ac.th/research/word/Criteria%20for%20evaluation.2555.pdf');    \"  ><span class=\"icon mif-share\"></span>  Readmore </button>";
                                
                                 
                                  $data["content1"]= "";
                                 
                                  /*
                                   <div class="list">
                <img src="<?=base_url()?>docs/images/disk-sys.png" class="list-icon">
                <span class="list-title">1</span>
                </div>
                                   */
                                 
                                   $data["content2"]= "<li>";
                                   
                                   $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2559 (1)  </span></div></div></h6>";
                                   
                                   $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Speech Correction for Children with Cleft Lip and Palate in Community: Kantharawichai Networking";
                                  
                                   $data["content2"] .=  nbs(3);
                                    $data["content2"] .=  "<button class=\"button loading-cube\" onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202016/S1-S8.pdf');  \">Loading...</button>";
                                    
                                                    //Prevalence of Oral Reading Problems in Thai Students with Cleft Palate, Grades 3-5 
                                       $data["content2"] .= "<br>";
                                    $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Prevalence of Oral Reading Problems in Thai Students with Cleft Palate, Grades 3-5";
                                  
                                   $data["content2"] .=  nbs(3);
                                   //http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202016/S9-S14.pdf
                                    $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202016/S9-S14.pdf');  \"  >Loading...</button>";
                                    
                                    
                                    
                                    $data["content2"] .= "</li>";
                                    
                                    

                                  $data["content2"] .= "<li>";
                                //  $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2559 (2)</h6>";
                                    $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2559 (2)</span></div></div></h6>";
                                
                                    /*
                                    $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Speech Correction for Children with Cleft Lip and Palate in Community: Kantharawichai Networking";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202016/S141-S147.pdf');  \">Loading...</button>";
                                 */
                                   
                                   // $data["content2"] .="<br>";
                                   //Hypnosis as an Adjunct for Managing Pain in Head and Neck Cancer Patients Post Radiotherapy
                                     $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Hypnosis as an Adjunct for Managing Pain in Head and Neck Cancer Patients Post Radiotherapy";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202016/S141-S147.pdf');  \">Loading...</button>";
                                 
                                   
                                   $data["content2"] .= "</li>";
                                                  
                                  
                                 $data["content2"] .= "<li>";
                                 // $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2558 (1)</h6>";
                                   $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2558 (1)</span></div></div></h6>";
                                  $data["content2"] .=   "<span class=\"icon mif-share\"></span>  \"Three Decades of History and Perspectives of Khon Kaen University's Plastic Surgery \"  ";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202015/S1-S10_TW35.pdf');  \" >Loading...</button>";
                                  $data["content2"] .= "</li>";
                                                  
                                     
                                   $data["content2"] .= "<li>";
                               //   $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2558 (2)</h6>";
                                    $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2558 (2)</span></div></div></h6>";
                                
                                 $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Anesthetic Techniques and Perioperative Complications of Cleft Lip and Cleft Palate Surgery at Srinagarind Hospital";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202015/S158-S163_TW31.pdf');  \" >Loading...</button>";
                                  $data["content2"] .= "</li>";
                                  
                                  
                                  //งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2557
                                    $data["content2"] .= "<li>";
                             //     $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2557</h6>";
                       //       $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2557</span></div></div></h6>";
                                      $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2557</span></div></div></h6>";
                           
                                    $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Treatment of 4-5 year old patients with Cleft Lip and
Cleft palate in Tawanchai Center: Prevalence and Type
of Associated Malformations";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202014/JMAT%202014%20Vol%2097,%20No%2010-1.pdf');  \"  >Loading...</button>";
                                  $data["content2"] .= "</li>";
                                  
                                  //งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2556
                                   $data["content2"] .= "<li>";
                         //         $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2556</h6>";
                                     $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2556</span></div></div></h6>";
                           
                                   $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Treatment of 4-5 Year Old Patients with Cleft Lip and Cleft Palate in Tawanchai Center";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202013/S1-S8_PS1.pdf');  \" >Loading...</button>";
                                  $data["content2"] .= "</li>";
                                  
                                  //งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2555
                                                $data["content2"] .= "<li>";
                           //       $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2555</h6>";
                                    $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2555</span></div></div></h6>";
                           
                                                $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Factors Related to Tooth Loss Due to Dental Caries
among Workers in an Industrial Estates in Thailand";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202012/S1-S6_P1.pdf');  \" >Loading...</button>";
                                  $data["content2"] .= "</li>";
                                  
                                  //งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2554
                                                       $data["content2"] .= "<li>";
                            //      $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2554</h6>";
                                $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2554</span></div></div></h6>";
                           
                                                       $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Comparison of a Clinical Method with
Two Radiographic Methods for Assessing Quality
of Alveolar Bone Grafts";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202011/Comparison%20of%20a%20Clinical%20Method%20with.pdf');  \"  >Loading...</button>";
                                  $data["content2"] .= "</li>";
                                  
                                         //งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2554
                                                       $data["content2"] .= "<li>";
                              //    $data["content2"] .= "<h6>งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2553</h6>";
                                   $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2553</span></div></div></h6>";
                           
                                                       $data["content2"] .=   "<span class=\"icon mif-share\"></span>  Community-Based Model for Speech Therapy
in Thailand Implementation";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\"  onclick=\" javascript: window.open('http://kkucleft.kku.ac.th/research/JMAT_FINAL/JMAT%20Final%202010/Community-Based%20Model%20for%20Speech%20Therapy.pdf');  \">Loading...</button>";
                                  $data["content2"] .= "</li>";
                                  
                                               //งานวิจัยศูนย์ ที่ลงตีพิมพ์ใน จพสท ฉบับพิเศษ‏ ปี 2554
                                                       $data["content2"] .= "<li>";
                             //     $data["content2"] .= "<h6>งานประชุม TCRC</h6>";
                                  $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานประชุม TCRC</span></div></div></h6>";
                           
                                                       $data["content2"] .=   "<span class=\"icon mif-share\"></span>  ";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\">Loading...</button>";
                                  $data["content2"] .= "</li>";
                                  
                                  
                                 // งานประชุมวิชาการประจำปี 2552
                                                                    $data["content2"] .= "<li>";
                           //       $data["content2"] .= "<h6>งานประชุมวิชาการประจำปี 2552</h6>";
                                                                          $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">งานประชุมวิชาการประจำปี 2552</span></div></div></h6>";
                           
                                 $data["content2"] .=   "<span class=\"icon mif-share\"></span> ";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\">Loading...</button>";
                                  $data["content2"] .= "</li>"; 
                                  
                                  
                                  //อื่นๆ
                                                                                           $data["content2"] .= "<li>";
                                 //$data["content2"] .= "<h6>อื่นๆ</h6>";
                                                                                               $data["content2"] .= "<div class=\"listview\" data-role=\"listview\"><div class=\"list\"><img src=\"".base_url()."docs/images/disk-sys.png\" class=\"list-icon\">   <h6><span class=\"list-title\">อื่นๆ</span></div></div></h6>";
                           
                                 $data["content2"] .=   "<span class=\"icon mif-share\"></span> ";
                                 $data["content2"] .=  nbs(3);
                                   $data["content2"] .=  "<button class=\"button loading-cube\">Loading...</button>";
                                  $data["content2"] .= "</li>"; 
                                  
                                  
                                $this->load->view("main2",$data);
                               
                                    
	}
                public function contactus() //ติดต่อเรา
                {
                   // http://10.87.196.170/research/index.php/welcome/contactus
                       $data["title"]=$this->title;
                       $data["file1"]="contactus";
                       
                       $data["head_content1"]= "<h5><strong><b> -: ติดต่อเรา</b></strong></h5>";
                        
                        
                       $detail= "<h6><strong><b> -: ศูนย์วิจัยเพื่อผู้ป่วยปากแหว่ง เพดานโหว่  และพิการทางศีรษะและใบหน้า</b></strong></h6>"."<hr class=\"thin\" />".br()."<b>คณะแพทยศาสตร์ มหาวิทยาลัยขอนแก่น".nbs(13)."มือถือ  :  081-185-1151   ".br()."123  ถ.มิตรภาพ  ต.ในเมือง".nbs(37)."โทรศัพท์  :  043-363-123  ".br()."อ.เมืองขอนแก่น จ.ขอนแก่น 40002".nbs(23)
                                     ."โทรสาร  :  043-202558  ".br().nbs(79)."Website : http://kkucleft.kku.ac.th/".br().nbs(50)."E-mail : cleft@kku.ac.th</b>";
                  
                       
                       $data["content1"] = " <ol class=\"numeric-list square-marker\">  "
                                                                     . "<li>  "
                                                                                        . "<h6><strong>  <span class=\"fg-black\">". $detail."</span></strong></h6>  "
                               
                                                                                       
                               
                                                                     . "</li>"
                                                      . " </ol>";
                       
                       $data["content2"] ="";
                       
                       $this->load->view("main2",$data);
                       
                       
                }
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */