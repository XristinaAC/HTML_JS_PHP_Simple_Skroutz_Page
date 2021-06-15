<!-- ONOMA : CHRISTINA PAPADODIMITRAKI -->
<!-- A.M.: 1684 -->

<!DOCTYPE html>
<html>
  <meta charset ="UTF-8"/> 
  <head>
    <title>Search</title>

    <style type = "text/css">

      body {
        background : #90AFC5;
      }

      #Hlekroniko_Katasthma{
        background : #517688;
        padding : 25px;
        text-align: center;
        color: white;
        display : block;
      }

      #h1_image
      {
        float : left;
      }

      #submitB
      {
        border-style : solid;
        border-radius : 10px;
        border-color : white #556B2F #556B2F white;
      }

      #FILTRA
      {
        float : left;
        width: 17%;
      }

      #ITEMS
      {
        float : left;
        padding-left: 50px;
      }

      #properties
      {
        margin-top : 5px;
       
      }

      .filtra_subcategories
      {
        border-bottom: 2px solid #556B2F;
      }

      .item_class
      {
        background-color : white;
        width : 450px;
        height: 200px;
        margin-top : 20px;
        padding : 20px;
      }

      .item_image
      {
        float : left;
        padding-right: 10px;
        margin-top: 10px;
      }
 
    </style>

    <script>
      function chooseFilter(item,flitraType)
      {
        var count = 0;
        for(var i = 0; i < contentArray[item]["filters"][flitraType].length; ++i)
        {
            if(document.getElementById(contentArray[item]["filters"][flitraType][i]).checked )
           {
              count++;
           }
        }

        if(count == contentArray[item]["filters"][flitraType].length || count == 0)
        {
          for(var j = 0; j < contentArray[item]["products"].length; ++j)
          {
            document.getElementById(contentArray[item]["products"][j]["model"]).style.display = '';
          }
        }
        else if(count > 0 && count <  contentArray[item]["filters"][flitraType].length)
        {
          for(var j = 0; j < contentArray[item]["products"].length; ++j)
          {
            if(document.getElementById(contentArray[item]["filters"][flitraType][contentArray[item]["products"][j][flitraType]]).checked)
            {
              document.getElementById(contentArray[item]["products"][j]["model"]).style.display = '';
              continue;
            }
            document.getElementById(contentArray[item]["products"][j]["model"]).style.display = 'none';
          }
        }
      }

      function cleanFilters(item)
      {
        for(var i = 0; i < contentArray[item]["filters"]["manufacturer"].length; ++i)
        {
          if(document.getElementById(contentArray[item]["filters"]["manufacturer"][i]).checked )
          {
            document.getElementById(contentArray[item]["filters"]["manufacturer"][i]).checked = false;
          }
        }

        for(var i = 0; i < contentArray[item]["filters"]["os"].length; ++i)
        {
          if(document.getElementById(contentArray[item]["filters"]["os"][i]).checked )
          {
            document.getElementById(contentArray[item]["filters"]["os"][i]).checked = false;
          }
        }

        for(var i = 0; i < contentArray[item]["products"].length; ++i)
        {
          if(document.getElementById(contentArray[item]["products"][i]["model"]).style.display = 'none')
          {
            document.getElementById(contentArray[item]["products"][i]["model"]).style.display = '';
          }
        }
      }
    </script>

  </head>
  <?php 
    include 'content.php'; 
    $item = $_GET["item"];

    if(in_array($item,$itemKinds) == false)
    {
      ?> <p style="font-style: italic;">Δεν βρέθηκαν προϊόντα σχετικά με τα <?php echo $item;?></p> 
  <?php
    }
    else
    {
  ?>
    <body>
      <script>
        var contentArray = <?php echo json_encode($content); ?>;
      </script>
      <div id="Hlekroniko_Katasthma">
        <h1><img id="h1_image" src = "images/skroutz.svg" alt="skroutz" />Ηλεκτρονικό Κατάστημα</h1>
      </div>

      <div id="FILTRA">
        <h2>Φίλτρα</h2>

         <div class="filtra_subcategories">
          <h3>Κατασκευαστής</h3>
           <form>
             <?php
               foreach($content[$item]["filters"]["manufacturer"] as $filter)
               {
                ?>
                <div><input type ="checkbox" id = "<?php echo "$filter" ?>" onclick = "chooseFilter('<?php echo $item;?>','manufacturer');"/> <?php echo "$filter" ?> </div>
                <?php
               }
              ?> <br> <?php
              ?>
           </form>
        </div>

        <div class="filtra_subcategories">
          <h3>Λειτουργικό Σύστημα</h3>
          <form>
            <?php
             foreach($content[$item]["filters"]["os"] as $filter)
             {
              ?>
              <div><input type ="radio" id = "<?php echo "$filter" ?>" onclick = "chooseFilter('<?php echo $item;?>','os');"/> <?php echo "$filter" ?> </div>
              <?php
             }
             ?> <br>
        </div>
        
        <br><input type="button" value="Καθαρισμός φίλτρων" action="search.php" onclick = "cleanFilters('<?php echo $item;?>');" />      
      </div>

      <div id = "ITEMS">
        <h1><?php echo $item?></h1>
        <?php     
          foreach($content[$item]["products"] as $product)
          {
            ?>
              <div id = "<?php echo $product["model"];?>" class="item_class">
                <img class="item_image" src = "<?php echo $product["image"]["src"];?>" width="<?php echo $product["image"]["width"]?>" height="<?php echo $product["image"]["height"]?>" alt="iPhone"/>
                <h2 style="margin-bottom:10px;"> <?php echo $product["title"];?> </h2>
                <div style ="font-weight:bold;";><?php echo $product["description"];?>
                <div><?php echo $product["price"];?>€</div>      
             </div>
      </div>
            <?php
          }
        ?>
      </div>
   </body>
  <?php }?>
</html>
