<style>
        .case{
            display: inline-block;
            width: 40px;
            height: 40px;
            border: 2px solid black;
            background-color: whitesmoke;
        }
        .case:nth-child(even){
            background-color: black;
        }

    </style>
    <?php
      $ligne='<div>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <br>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <span class="case"></span>
        <br>
         </div>';

        //  echo $ligne;
         for($i=1; $i<=3; $i++)
         {
          echo $ligne;
         }
         ?>