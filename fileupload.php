<!DOCTYPE html>
<htmL>
  <head>
<title>Upload your file</title>
     <link href="css/style3.css" rel="stylesheet" type="text/css">

    </head>


    <div id='cssmenu'>

            <ul class="knoppen">
                <h1>The Wall Project</h1>
             <li class='active'><a id="ewa" href='index.php'><span>Home</span></a></li>
                <li><a href='share.html'><span>Share</span></a></li>
                <li><a href='faq.html'><span>FAQ</span></a></li>
                <li><a href='index.html'><span>Log in</span></a></li>
                <li><a href='indexregistreer.html'><span>Registreer</span></a></li>

            </ul>

    </div>
<div class="login-page">
<div class="form">


<form method="post" enctype="multipart/form-data" action="uploadfile.php">



    <input type="file" name="image">

      <input type="text" placeholder="Name" name="title" required="required">

        <input type="text" placeholder="Description" name="des" required="required">

     <input type="text" placeholder="Tags" name="tag" required="required">

<input type="submit" name="sumit" value="Upload now">
</form>
