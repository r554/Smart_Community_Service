<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="<?php echo site_url('Backend/Dashboard'); ?>" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Pengaduan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= base_url('Backend/Pengaduan') ?>">Pengaduan Masuk</a></li>
                    <li><a href="<?= base_url('Backend/Pengaduan/tampil_pengaduan_diproses') ?>">Pengaduan Diproses</a></li>
                    <li><a href="<?= base_url('Backend/Pengaduan/tampil_pengaduan_dibatalkan') ?>">Pengaduan Dibatalkan</a></li>
                    <li><a href="<?= base_url('Backend/Pengaduan/tampil_pengaduan_selesai') ?>">Pengaduan Selesai</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Data Master</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">Data Dinas</a></li>
                    <li><a href="./app-calender.html">Data User</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url('Backend/Kelola_Dinas'); ?>" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Laporan</span>
                </a>
            </li>

        </ul>

        <!-- <div class="add-menu-sidebar">
            <img src="<?= base_url() ?>assets/admin/images/icon1.png" alt="" />
            <p>Organize your menus through button bellow</p>
            <a href="javascript:void(0);" class="btn btn-primary btn-block light">+ Add Menus</a>
        </div> -->
        <div class="copyright">
            <p><strong>Dera Official</strong> © 2021 All Rights Reserved</p>
            <!-- <p>Made with <i class="fa fa-heart"></i> by dera</p> -->
        </div>
    </div>
</div>