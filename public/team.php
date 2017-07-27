<?php

require("base/functions.php");

 $page=new page("Join the team");
 $page->setDescription("join the team");
 
// MAIN CONTENT GOES HERE
    $content = <<<EOT
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    
      <div class="row flow-text">
      <h1 class="header uppercase">%s</h1>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis tellus sit amet nisl fermentum feugiat id non mauris. Nullam sed euismod tortor. Duis volutpat ex lorem, a venenatis ipsum tristique sit amet. Etiam congue libero neque, vitae tristique libero maximus vitae. Nullam tellus nisi, aliquet quis dignissim non, pulvinar ac eros. Duis eget nibh et nunc molestie condimentum id ut leo. Suspendisse ultrices tincidunt malesuada. Donec auctor pulvinar nisi, quis mollis magna elementum elementum.
      </p>
      <p>
Duis eleifend nisl libero, eu sagittis nunc viverra eu. Quisque massa nibh, faucibus sit amet volutpat quis, condimentum fringilla diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla sollicitudin nibh euismod placerat cursus. Nam luctus felis nunc, vel dictum leo varius id. Cras ipsum massa, suscipit sit amet quam ac, feugiat viverra quam. Pellentesque sed tortor mauris. Morbi quis sem convallis dolor finibus sagittis. Donec vulputate venenatis ex in lobortis. Maecenas scelerisque a urna non congue. Pellentesque ac lectus ex. Vestibulum vel viverra lectus, ut luctus dolor. Quisque eu hendrerit odio, a iaculis elit. Praesent pellentesque, elit sit amet scelerisque suscipit, nibh mauris posuere leo, eget varius lectus neque ac odio. Vestibulum quis iaculis libero.
</p>
Aenean dictum tellus rutrum dolor convallis porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Mauris ipsum odio, blandit nec quam at, blandit tincidunt erat. Mauris gravida dictum mi, sed ultrices ipsum fermentum nec. Nullam vestibulum nisl at molestie vehicula. Cras eget sem volutpat, varius dolor in, eleifend lectus.
<p>
Aenean porttitor mi est, quis semper lectus tincidunt ut. Praesent a mauris ultricies, feugiat mi at, volutpat nunc. Nunc vitae tellus ultrices, faucibus massa non, cursus nibh. Aliquam erat volutpat. Mauris eleifend, enim ut varius ultricies, metus nulla aliquet lacus, sit amet vestibulum velit ante ut mauris. Nullam semper, felis sed egestas ornare, massa metus faucibus nibh, et suscipit nisl lorem nec eros. Aliquam orci mi, consequat ac vestibulum condimentum, sollicitudin id ex. Aenean nunc metus, placerat vitae feugiat nec, imperdiet a dui. Donec sit amet feugiat metus, vitae hendrerit magna.
</p>
<p>
Suspendisse finibus congue rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie quis tellus vitae imperdiet. Suspendisse at purus hendrerit, faucibus arcu nec, dapibus nunc. Vestibulum lobortis nulla ante, quis volutpat tortor molestie sed. Nunc nec nisi lacinia, ultricies metus iaculis, pretium eros. Mauris scelerisque congue leo ac dictum. Ut scelerisque quis sem eu interdum. Cras a rutrum urna. Phasellus sodales malesuada nisi ut vestibulum. Etiam id est non lacus eleifend fringilla id in ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam iaculis finibus efficitur.
</p>
      </div>
      <br><br>

    </div>
  </div>





EOT;
// END OF MAIN CONTENT

    $content=sprintf($content,$page->title);
    $page->setContent($content);
    $page->render();

// show php errors in JS console 
$errorHandler->errorConsole();

?>
