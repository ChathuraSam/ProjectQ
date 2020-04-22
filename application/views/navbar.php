<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>index.php/#page-top">Project Q</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>index.php/#about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>index.php/#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>index.php/#contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>index.php/auth/">Sign In</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>index.php/register/">Sign Up</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url();?>auth/logout">Logout</a>
          </li>

          <li class="nav-item">
            <?php 
            if ($this->session->userdata('first_name')==NULL) {
              echo "<a class='nav-link js-scroll-trigger'> Hello Guest</a>";
            }else{
              echo "<a class='nav-link js-scroll-trigger'> Hello ".$this->session->userdata('first_name')."</a>";
            } 

            ?>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>