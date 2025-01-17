<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/public/views/assets/css/style.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <title>Sistem Surat</title>

</head>

<body class="bg-gray-100">
    <!-- start navbar -->
    <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

        <!-- logo -->
        <div class="flex-none w-56 flex flex-row items-center">
            <a href="<?= BASE_URL; ?>" class="flex flex-row items-center">
                <img src="public/views/assets/img/anje.jpeg.jpg" class="w-10 flex-none">
                <strong class="capitalize ml-1 flex-1">Surat Menyurat</strong>
            </a>

            <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
                <i class="fad fa-list-ul"></i>
            </button>
        </div>
        <!-- end logo -->

        <!-- navbar content toggle -->
        <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
            <i class="fad fa-chevron-double-down"></i>
        </button>
        <!-- end navbar content toggle -->

        <!-- navbar content -->
        <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
            <!-- left -->
            <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">

            </div>
            <!-- end left -->

            <!-- right -->
            <div class="flex flex-row-reverse items-center">

                <!-- user -->
                <div class="dropdown relative md:static">

                    <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                        <div class="ml-2 capitalize flex ">
                            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none"><?= $_SESSION['username']; ?></h1>
                            <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                        </div>
                    </button>

                    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                    <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="<?= BASE_URL; ?>logout">
                            <i class="fad fa-user-times text-xs mr-1"></i>
                            log out
                        </a>
                        <!-- end item -->

                    </div>
                </div>
                <!-- end user -->

            </div>
            <!-- end right -->
        </div>
        <!-- end navbar content -->

    </div>
    <!-- end navbar -->


    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

        <!-- start sidebar -->
        <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


            <!-- sidebar content -->
            <div class="flex flex-col">

                <!-- sidebar toggle -->
                <div class="text-right hidden md:block mb-4">
                    <button id="sideBarHideBtn">
                        <i class="fad fa-times-circle"></i>
                    </button>
                </div>
                <!-- end sidebar toggle -->

                <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

                <!-- link -->
                <a href="<?= BASE_URL; ?>" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-home text-xs mr-2 "></i> home
                </a>
                <a href="<?= BASE_URL; ?>suratmasuk" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-envelope-open-text text-xs mr-2 "></i> Surat Masuk
                </a>
                <a href="<?= BASE_URL; ?>suratkeluar" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-envelope text-xs mr-2"></i> Surat Keluar
                </a>
                <?php if ($_SESSION['leveluser'] == 1) { ?>
                    <a href="<?= BASE_URL; ?>user" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-user text-xs mr-2"></i> User
                    </a>
                <?php } ?>
                <!-- end link -->

            </div>
            <!-- end sidebar content -->

        </div>
        <!-- end sidbar -->