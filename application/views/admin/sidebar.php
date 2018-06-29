<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item <?php if(!$this->uri->segment(2)=="listacc"){echo 'active';}?>"><a href="<?=site_url('Admin') ?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2)=="listacc"){echo 'active';}?>"><a href="<?=site_url('Admin/listacc') ?>"><i class="ft-user"></i><span class="menu-title" data-i18n="">Setting User</span></a>
            </li>
             <li class="nav-item <?php if($this->uri->segment(2)=="event"){echo 'active';}?>"><a href="<?=site_url('Admin/event') ?>"><i class="ft-calendar"></i><span class="menu-title" data-i18n="">Event</span></a>
            </li>
        </ul>
    </div>
</div>