<?php error_reporting(0); include("./config.php"); if(empty($dlapi)) {echo "<center><H1> Please Enter Api Key </H1></center>"; die(); } else echo ''; $urlx = $_SERVER['REQUEST_URI']; $video_id = explode("vkr=", $urlx); $video_id = $video_id[1]; $llooc = urldecode($video_id); $llocf = urlencode($video_id); $lloc = urldecode($video_id); preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $llooc, $matches); if(stripos($llooc,'://')===false){header('location: ./search.php/?vkr='.$llooc.''); die(); } else echo ''; $googleApiUrl = "http://dl4hut.xyz/server?vkr=$llocf"; $ch = curl_init(); curl_setopt($ch, CURLOPT_HEADER, 0); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_URL, $googleApiUrl); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); curl_setopt($ch, CURLOPT_VERBOSE, 0); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); $response = curl_exec($ch); curl_close($ch); $data = json_decode($response); $value = json_decode(json_encode($data), true); $title = $value['data']['title'];$duration = $value["data"]["duration"]; $thumb = $value["data"]["thumb"]; $urll = $value["data"]["url"]; $error = $value["data"]["error"]; $mp3 = $value["data"]["mp3"]; $hd = $value["data"]["hd"]; $sd = $value["data"]["sd"]; $dl1 = $value["data"]["a"]["dl"]; $type1 = $value["data"]["a"]["type"]; $quality1 = $value["data"]["a"]["format"]; $dl2 = $value["data"]["b"]["dl"]; $type2 = $value["data"]["b"]["type"]; $quality2 = $value["data"]["b"]["format"]; $dl3 = $value["data"]["c"]["dl"]; $type3 = $value["data"]["c"]["type"]; $quality3 = $value["data"]["c"]["format"]; $dl4 = $value["data"]["d"]["dl"]; $type4 = $value["data"]["d"]["type"]; $quality4 = $value["data"]["d"]["format"]; $dl5 = $value["data"]["e"]["dl"]; $type5 = $value["data"]["e"]["type"]; $quality5 = $value["data"]["e"]["format"]; $dl6 = $value["data"]["f"]["dl"]; $type6 = $value["data"]["f"]["type"]; $quality6 = $value["data"]["f"]["format"]; $dl7 = $value["data"]["g"]["dl"]; $type7 = $value["data"]["g"]["type"]; $quality7 = $value["data"]["g"]["format"]; $dl8 = $value["data"]["h"]["dl"]; $type8 = $value["data"]["h"]["type"]; $quality8 = $value["data"]["h"]["format"]; $dl9 = $value["data"]["i"]["dl"]; $type9 = $value["data"]["i"]["type"]; $quality9 = $value["data"]["i"]["format"]; $dl10 = $value["data"]["j"]["dl"]; $type10 = $value["data"]["j"]["type"]; $quality10 = $value["data"]["j"]["format"]; $dl11 = $value["data"]["k"]["dl"]; $type11 = $value["data"]["k"]["type"]; $quality11 = $value["data"]["k"]["format"]; $dl12 = $value["data"]["l"]["dl"]; $type12 = $value["data"]["l"]["type"]; $quality12 = $value["data"]["l"]["format"]; $dl13 = $value["data"]["m"]["dl"]; $type13 = $value["data"]["m"]["type"]; $quality13 = $value["data"]["m"]["format"]; $dl14 = $value["data"]["n"]["dl"]; $type14 = $value["data"]["n"]["type"]; $quality14 = $value["data"]["n"]["format"]; $dl15 = $value["data"]["o"]["dl"]; $type15 = $value["data"]["o"]["type"]; $quality15 = $value["data"]["o"]["format"]; $dl16 = $value["data"]["p"]["dl"]; $type16 = $value["data"]["p"]["type"]; $quality16 = $value["data"]["p"]["format"]; $dl17 = $value["data"]["q"]["dl"]; $type17 = $value["data"]["q"]["type"]; $quality17 = $value["data"]["q"]["format"]; $dl18 = $value["data"]["r"]["dl"]; $type18 = $value["data"]["r"]["type"]; $quality18 = $value["data"]["r"]["format"]; $dlk = explode("vkr=", $dl3); $dlk = $dlk[1]; if(empty($thumb)){$thumbux = "http://dl4hut.xyz/img/logo.png";} else $thumbux = $thumb; ?> <!DOCTYPE html> <html> <head> <title> Download : <?php echo $title; ?> - <?php echo $webname; ?> Online <?php echo $dwlname; ?> Videos Downloader </title> <meta name="title" content="<?php echo $webname; ?> : Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader"> <meta name="description" content="<?php echo $webname; ?> :  Online - <?php echo $dwlname; ?> Video & Audio Downloader"> <meta name="keywords" content="Video,Audio, Downloader, Online - <?php echo $dwlname; ?> Video & Audio Downloader"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"><meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="revisit-after" content="5 days"> <meta name="author" content="TheOfficialVKr"> <meta itemprop="name" content="<?php echo $webname; ?> :  Online - <?php echo $dwlname; ?> Video & Audio Downloader"> <meta itemprop="image" content="<?php echo $thumbux; ?>"> <meta name="twitter:card" content="summary_large_image"> <meta name="twitter:title" content="<?php echo $webname; ?> - Online - <?php echo $dwlname; ?> Video & Audio Downloader"> <meta name="twitter:site" content="theofficialvkr"> <meta name="twitter:creator" content="itsmethevkr"> <meta property="og:title" content="<?php echo $webname; ?> :  Online - <?php echo $dwlname; ?> Video & Audio Downloader"> <meta property="og:description" content="Online - <?php echo $dwlname; ?> Video & Audio Downloader"> <meta property="og:image" content="<?php echo $thumbux; ?>"> <meta name="twitter:image:src" content="http://dl4hut.xyz/streams.php?vkr=<?php echo $thumbux; ?>"> <meta name="twitter:image" content="http://dl4hut.xyz/streams.php?vkr=<?php echo $thumbux; ?>"> <meta property="og:url" content="http://dl4hut.xyz/streams.php?vkr=<?php echo $thumbux; ?>"> <meta property="og:site_name" content="<?php echo $webname; ?> :  Online - <?php echo $dwlname; ?> Video & Audio Downloader"> <meta property="fb:app_id" content="427710135379286"> <meta property="og:locale" content="en_US"> <meta property="og:type" content="website"> <meta name="msapplication-TileColor" content="#ffffff"> <meta name="theme-color" content="#ffffff"> <link rel="icon" type="image/png" href="http://dl4hut.xyz/img/logo.png"> <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@300&display=swap" rel="stylesheet"> <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="http://dl4hut.xyz/inc/vkr.css" rel="stylesheet"> </head> <body> <main> <div class="title"> <a href="./"> <center><h1 style="color:white;" id="title"> Online Videos Downloader </h1></center></a> <p id="description">Download Videos Easily in all Format And Quality </p> </div> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <div id="pageloader"> <img width="90%" src="http://dl4hut.xyz/img/loading.gif" alt="processing..." > </div> <div id="myform"> <form id="survey-form" method="get" action="./download.php" id="myform"> <label for="name" id="name-label" class="uno">Video Name or URL </label> <input required type="text" id="name" name="vkr" placeholder="Enter Video Name Or URL" requiered> <!--<button type="submit" id="submit" class="submit uno">Search / Download</button> --> <button id="btn-convert" class="btn-red" type="submit">Search / Download</button> </form> </div> <script> $(document).ready(function(){$("#myform").on("submit", function(){$("#pageloader").fadeIn(); }); }); </script> <?php if(!empty($message)){echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><center style="word-wrap:word-break;">'.$error.' <br><h1 class="title">Error1: Sorry May this link not supported or invalid link Please check and try again or <a href="/">Back To Home </a></h1></center>'; } elseif(empty($title)){echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><center style="word-wrap:word-break;"> '.$error.' <br><h1 class="title">Error: Sorry May this link not supported or invalid link Please check and try again or <a href="/">Back To Home </a></h1></center>'; } else echo'<center> <!-- ShareThis BEGIN --><div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END --><br> <h2 style="word-break: break-all;" class="title"> Download '.$title.'  </h2> <video poster="'.$thumbux.'" width="100%" height="340" controls> <source src="'.$dlk.'" type="video/mp4"> <source src="'.$dl3.'" type="video/mp4"> <source src="'.$dl4.'" type="video/mp4"> <source src="'.$dl1.'" type="video/mp4"> <source src="'.$dl5.'" type="video/mp4"> <source src="'.$dl6.'" type="video/mp4"> <source src="'.$dl7.'" type="video/mp4"> <source src="'.$dl8.'" type="video/mp4"> <source src="http://dl4hut.xyz/takatak.php/?vkr='.$urrl.'" type="video/mp4"> <source src="http://dl4hut.xyz/wmyjosh.php/?vkr='.$thumbux.'" type="video/mp4"> Your browser does not support the video tag. </video> <br><h3 style="color:white;">'.$message.' . Duration : '.$duration.' </h3> '; ?> <?php if(stripos($llooc,'mxtak')==true){echo '<br> <a href="http://dl4hut.xyz/takatak.php/?vkr='.$urrl.'"> <button   class="btn-reds"> Download Without WaterMark </button></a><br>'; } else echo ''; if(stripos($llooc,'myjosh')==true){echo '<br> <a href="http://dl4hut.xyz/wmyjosh.php/?vkr='.$thumbux.'"> <button   class="btn-reds"> Download Video Without Watermark Now </button></a><br>'; } else echo ''; if(stripos($llooc,'myjosh')==true){echo '<br> <a href="http://dl4hut.xyz/myjosh.php/?vkr='.$thumbux.'"> <button   class="btn-reds"> Download Video With Watermark Now </button></a><br>'; } else echo ''; if(!empty($mp3)){echo '<br> <a href="'.$mp3.'"> <button   class="btn-reds"> Download  in MP3 </button></a><br>'; } else echo ''; if(!empty($hd)){echo '<br> <a href="'.$hd.'"> <button   class="btn-reds"> Download  in HD </button></a><br>'; } else echo ''; if(!empty($sd)){echo '<br> <a href="'.$sd.'"> <button   class="btn-reds"> Download  in SD </button></a><br>'; } else echo ''; if(!empty($dl1 && $type1)){echo '<br> <a href="'.$dl1.'"> <button   class="btn-reds"> Download '.$type1.' in '.$quality1.' </button></a><br>'; } else echo ''; if(!empty($dl2 && $type2)){echo '<br> <a href="'.$dl2.'"> <button   class="btn-reds"> Download '.$type2.' in '.$quality2.' </button></a><br>'; } else echo ''; if(!empty($dl3 && $type3)){echo '<br> <a href="'.$dl3.'"> <button   class="btn-reds"> Download '.$type3.' in '.$quality3.' </button></a><br>'; } else echo ''; if(!empty($dl4 && $type4)){echo '<br> <a href="'.$dl4.'"> <button   class="btn-reds"> Download '.$type4.' in '.$quality4.' </button></a><br>'; } else echo ''; if(!empty($dl5 && $type5)){echo '<br> <a href="'.$dl5.'"> <button   class="btn-reds"> Download '.$type5.' in '.$quality5.' </button></a><br>'; } else echo ''; if(!empty($dl6 && $type6)){echo '<br> <a href="'.$dl6.'"> <button   class="btn-reds"> Download '.$type6.' in '.$quality6.' </button></a><br>'; } else echo ''; if(!empty($dl7 && $type7)){echo '<br> <a href="'.$dl7.'"> <button   class="btn-reds"> Download '.$type7.' in '.$quality7.' </button></a><br>'; } else echo ''; if(!empty($dl8 && $type8)){echo '<br> <a href="'.$dl8.'"> <button   class="btn-reds"> Download '.$type8.' in '.$quality8.' </button></a><br>'; } else echo ''; if(!empty($dl9 && $type9)){echo '<br> <a href="'.$dl9.'"> <button   class="btn-reds"> Download '.$type9.' in '.$quality9.' </button></a><br>'; } else echo ''; if(!empty($dl10 && $type10)){echo '<br> <a href="'.$dl10.'"> <button   class="btn-reds"> Download '.$type10.' in '.$quality10.' </button></a><br>'; } else echo ''; if(!empty($dl11 && $type11)){echo '<br> <a href="'.$dl11.'"> <button   class="btn-reds"> Download '.$type11.' in '.$quality11.' </button></a><br>'; } else echo ''; if(!empty($dl12 && $type12)){echo '<br> <a href="'.$dl12.'"> <button   class="btn-reds"> Download '.$type12.' in '.$quality12.' </button></a><br>'; } else echo ''; if(!empty($dl13 && $type13)){echo '<br> <a href="'.$dl13.'"> <button   class="btn-reds"> Download '.$type13.' in '.$quality13.' </button></a><br>'; } else echo ''; if(!empty($dl14 && $type14)){echo '<br> <a href="'.$dl14.'"> <button   class="btn-reds"> Download '.$type14.' in '.$quality14.' </button></a><br>'; } else echo ''; if(!empty($dl15 && $type15)){echo '<br> <a href="'.$dl15.'"> <button   class="btn-reds"> Download '.$type15.' in '.$quality15.' </button></a><br>'; } else echo ''; if(!empty($dl16 && $type16)){echo '<br> <a href="'.$dl16.'"> <button   class="btn-reds"> Download '.$type16.' in '.$quality16.' </button></a><br>'; } else echo ''; if(!empty($dl17 && $type17)){echo '<br> <a href="'.$dl17.'"> <button   class="btn-reds"> Download '.$type17.' in '.$quality17.' </button></a><br>'; } else echo ''; if(!empty($dl18 && $type18)){echo '<br> <a href="'.$dl18.'"> <button   class="btn-reds"> Download '.$type18.' in '.$quality18.' </button></a><br>'; } else echo ''; ?> <div class="ftco-section center"> <h2 class="title">The Best Videos Downloader</h2> <ul class="listitem items-more"> <li> <div class="post-image bg1"> <img src="http://dl4hut.xyz/img/clock.svg" alt="Fast and easy to use"> </div> <div class="post-content"> <h3>Fast and easy to use</h3> <p>Using our Videos downloader is the fast and easy way to download and save any video to MP3 or MP4. Simply copy Videos URL, paste it on the search box and click on "Search / Download" button. No register accounts needed. </p> </div> </li> <li> <div class="post-image bg2"> <img src="http://dl4hut.xyz/img/limit.svg" alt="Without limitation"> </div> <div class="post-content"> <h3>Without limitation</h3> <p>Download and convert videos as much as you want without limitation and always free. </p> </div> </li> <li> <div class="post-image bg3"> <img src="http://dl4hut.xyz/img/safe.svg" alt="Safe and Clean"> </div> <div class="post-content"> <h3>100% Safe and Clean</h3> <p>With the rising awareness of device security, people attach great importance to personal data. The service is totally clean with no virus under intense supervision based on security database. </p> </div> </li> <li> <div class="post-image bg4"> <img src="http://dl4hut.xyz/img/platform.svg" alt="Full platforms supported"> </div> <div class="post-content"> <h3>Full platforms supported</h3> <p>We support all device platforms. Easy to convert videos to MP3 files regardless of whether you are using Windows, Mac or Linux, Android, iPhone. </p> </div> </li> <li> <div class="post-image bg5"> <img src="http://dl4hut.xyz/img/support.svg" alt="Full file format supported"> </div> <div class="post-content"> <h3>Full file format supported</h3> <p>We support all video and audio formats conversion. You can easily convert videos to MP3, 3GP, MP4, WMA, M4A, FLV, WEBM and MO formats, etc. </p> </div> </li> <li> <div class="post-image bg6"> <img src="http://dl4hut.xyz/img/cloud.svg" alt="Cloud support"> </div> <div class="post-content"> <h3>Cloud support</h3> <p>We support uploading the converted files to your DropBox and Google Drive. </p> </div> </li> </ul> </div> </div> </main> </body> </html>