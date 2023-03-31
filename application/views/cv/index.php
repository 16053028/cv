<body id="top">
  <?php
  $this->load->view('cv/_component/header');
  ?>

  <div class="page-content">
    <div>

      <?php
      $this->load->view('cv/_component/profile-page');
      $this->load->view('cv/_component/about');
      $this->load->view('cv/_component/skills');
      $this->load->view('cv/_component/portofolio');
      $this->load->view('cv/_component/work-experiences');
      $this->load->view('cv/_component/education');
      $this->load->view('cv/_component/references');
      $this->load->view('cv/_component/contact');
      ?>

    </div>
  </div>

  <?php
  $this->load->view('cv/_component/footer');
  ?>