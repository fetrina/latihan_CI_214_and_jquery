<!-- Latihan Buku CI & Jquery | Halaman 66-68
     BAB 4.2 Tab | 
-->

<!--View Tab-->
<html lang="id">
  <head>
      <title>jQuery Tab</title>
      
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>tabs-2.css">
      <script type="text/javascript" src="<?php echo base_url();?>jquery.tools.min.js"></script>
      <!--Di CI klo mau link js atau css, lwt src atau href, musti pake php echo base_url();nama_linknya -->

      <script type="text/javascript">
        $(document).ready(function(){
            //select flowpanes and make it scrollable.
            //use circular and navigator plugins
            $("#flowpanes").scrollable({size:1}).circular().mousewheel(400).navigator({
              
              //select #flowtabse to be used as navigator
              navi: "#flowtabs",

              //select A tags inside the navigator to work as items
              naviItem: 'a',

              //assign "current" class name for the active
              //A tag inside navigator
              activeClass: 'current'
              
            });
        });
      </script>

      <!-- Tab Styling -->
      <style type="text/css">
        /*override the root element to enable scrolling*/
        #flowpanes{
          position: relative;
          overflow: hidden;
          clear: both;
        }

        /*override single pane*/
        #flowpanes div{
          float: left;
          display: block;
          width: 670px;
          cursor: pointer;
          font-size: 14px;
        }

        /*our additional wrapper element for the items*/
        #flowpanes .items{
          width: 20000em;
          position: absolute;
          clear: both;
          margin: 0;
          padding: 0;
        }

        #flowpanes .less, #flowpanes .less a{
          color: #999 !important;
          font-size: 11px;
        }

      </style>
  </head>
  <body>
  
    <h3>4.1 Tab jquery</h3>
    
    <ul id="flowtabs">
      <li><a class="current" id="t1" href="#story">The story</a></li>
      <li><a id="t2" href="#features">Features</a></li>
      <li><a id="t3" href="#plugins">Plugins</a></li>
      <li><a id="t4" href="#demos">Demos</a></li>
    </ul>

    <div id="flowpanes">
      
      <!-- wrapper for scrollable items -->
      <div style="left: -910px;" class="items">
        
      <div class="narrow cloned">
        <h2>Tab Content jQuery Codeigniter 1</h2>
        <p> <?php echo $tab1;?> </p>
      </div>

      <div>
        <h2>Tab Content jQuery Codeigniter 2</h2>
        <p> <?php echo $tab2;?> </p>
      </div>
      
      <div>
        <h2>Tab Content jQuery Codeigniter 3</h2>
        <p> <?php echo $tab3;?> </p>
      </div>

      <div>
        <h2>Tab Content jQuery Codeigniter 4</h2>
        <p> <?php echo $tab4;?> </p>
      </div>
    </div>


  </body>
</html>