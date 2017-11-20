<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="'.site_url('home').'">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>

        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mahasiswa">
          <a class="nav-link" href="'.site_url('datamahasiswa').'">
            <i class="fa fa-user"></i>
            <span class="nav-link-text">Mahasiswa</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Aspirasi">
          <a class="nav-link" href="'.site_url('mahasiswa').'">
            <i class="fa fa-bullhorn"></i>
            <span class="nav-link-text">Aspirasi</span>
          </a>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Struktur BLM">
          <a class="nav-link" href="'.site_url('struktur').'">
             <i class="fa fa-users"></i>
            <span class="nav-link-text">Struktur BLM</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ubah Password">
          <a class="nav-link" href="'.site_url('about').'">
             <i class="fa fa-info"></i>
            <span class="nav-link-text">Ubah Password</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
          <a class="nav-link" href="'.site_url('about2').'">
             <i class="fa fa-info-circle"></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>

		
	';
	}

	function menu()
	{
		return '<a href="'.site_url('loginmember').'">Mahasiswa</a>
						
		';
	}

	function menumember()
	{
		return '<a href="'.site_url('login').'">Admin</a>
						
		';
	}

	function generate_sidemenu2()
	{
		return 

	'
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="'.site_url('home_admin').'">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mahasiswa">
          <a class="nav-link" href="'.site_url('datamahasiswa_admin').'">
            <i class="fa fa-user"></i>
            <span class="nav-link-text">Mahasiswa</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Aspirasi">
          <a class="nav-link" href="'.site_url('mahasiswa_admin').'">
            <i class="fa fa-bullhorn"></i>
            <span class="nav-link-text">Aspirasi</span>
          </a>
        </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Struktur BLM">
          <a class="nav-link" href="'.site_url('struktur_admin').'">
             <i class="fa fa-users"></i>
            <span class="nav-link-text">Struktur BLM</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
          <a class="nav-link" href="'.site_url('about_admin').'">
             <i class="fa fa-info-circle"></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>

		
	'

	;
	}