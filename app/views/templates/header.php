<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS; ?>navbar.css">
    <?php
    if (isset($data['css'])) {
        echo baseCSS, CSS, "{$data['css']}.css", endCSS;
    }
    ?>

</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav w-100">
            <li class="nav-item">
                <a href="<?= BASEURL; ?>" class="nav-link">
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="cat" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-cat fa-w-16 fa-9x">
                        <g class="fa-group">
                            <path fill="currentColor" d="M448 96h-64l-64-64v134.4a96 96 0 0 0 192 0V32zm-72 80a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm80 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm-165.41 16a204.07 204.07 0 0 0-34.59 2.89V272l-43.15-64.73a183.93 183.93 0 0 0-44.37 26.17L192 304l-60.94-30.47L128 272v-80a96.1 96.1 0 0 0-96-96 32 32 0 0 0 0 64 32 32 0 0 1 32 32v256a64.06 64.06 0 0 0 64 64h176a16 16 0 0 0 16-16v-16a32 32 0 0 0-32-32h-32l128-96v144a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V289.86a126.78 126.78 0 0 1-32 4.54c-61.81 0-113.52-44.05-125.41-102.4z" class="fa-secondary"></path>
                            <path fill="currentColor" d="M376 144a16 16 0 1 0 16 16 16 16 0 0 0-16-16zm80 0a16 16 0 1 0 16 16 16 16 0 0 0-16-16zM131.06 273.53L192 304l-23.52-70.56a192.06 192.06 0 0 0-37.42 40.09zM256 272v-77.11a198.62 198.62 0 0 0-43.15 12.38z" class="fa-primary"></path>
                        </g>
                    </svg>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= BASEURL; ?>daftaraduan" class="nav-link">
                    <svg width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.75 3.5H12C12 1.85938 10.6406 0.5 9 0.5C7.3125 0.5 6 1.85938 6 3.5H2.25C0.984375 3.5 0 4.53125 0 5.75V22.25C0 23.5156 0.984375 24.5 2.25 24.5H15.75C16.9688 24.5 18 23.5156 18 22.25V5.75C18 4.53125 16.9688 3.5 15.75 3.5ZM4.5 20.375C3.84375 20.375 3.375 19.9062 3.375 19.25C3.375 18.6406 3.84375 18.125 4.5 18.125C5.10938 18.125 5.625 18.6406 5.625 19.25C5.625 19.9062 5.10938 20.375 4.5 20.375ZM4.5 15.875C3.84375 15.875 3.375 15.4062 3.375 14.75C3.375 14.1406 3.84375 13.625 4.5 13.625C5.10938 13.625 5.625 14.1406 5.625 14.75C5.625 15.4062 5.10938 15.875 4.5 15.875ZM4.5 11.375C3.84375 11.375 3.375 10.9062 3.375 10.25C3.375 9.64062 3.84375 9.125 4.5 9.125C5.10938 9.125 5.625 9.64062 5.625 10.25C5.625 10.9062 5.10938 11.375 4.5 11.375ZM9 2.375C9.60938 2.375 10.125 2.89062 10.125 3.5C10.125 4.15625 9.60938 4.625 9 4.625C8.34375 4.625 7.875 4.15625 7.875 3.5C7.875 2.89062 8.34375 2.375 9 2.375ZM15 19.625C15 19.8594 14.8125 20 14.625 20H7.875C7.64062 20 7.5 19.8594 7.5 19.625V18.875C7.5 18.6875 7.64062 18.5 7.875 18.5H14.625C14.8125 18.5 15 18.6875 15 18.875V19.625ZM15 15.125C15 15.3594 14.8125 15.5 14.625 15.5H7.875C7.64062 15.5 7.5 15.3594 7.5 15.125V14.375C7.5 14.1875 7.64062 14 7.875 14H14.625C14.8125 14 15 14.1875 15 14.375V15.125ZM15 10.625C15 10.8594 14.8125 11 14.625 11H7.875C7.64062 11 7.5 10.8594 7.5 10.625V9.875C7.5 9.6875 7.64062 9.5 7.875 9.5H14.625C14.8125 9.5 15 9.6875 15 9.875V10.625Z" fill="#121C51" />
                    </svg>
                    <span class="link-text">Daftar Aduan</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= BASEURL; ?>" class="nav-link">
                    <svg width="28" height="23" viewBox="0 0 28 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5781 2.875L6.40625 7H1.625C0.96875 7 0.5 7.51562 0.5 8.125V14.875C0.5 15.5312 0.96875 16 1.625 16H6.40625L10.5781 20.1719C11.2812 20.875 12.5 20.4062 12.5 19.375V3.67188C12.5 2.64062 11.2812 2.17188 10.5781 2.875ZM21.5 0.4375C20.9844 0.109375 20.2812 0.25 19.9062 0.765625C19.5781 1.32812 19.7188 2.03125 20.2344 2.35938C23.375 4.375 25.2031 7.84375 25.2031 11.5469C25.2031 15.2031 23.375 18.6719 20.2344 20.6875C19.7188 21.0156 19.5781 21.7188 19.9062 22.2812C20.2344 22.75 20.9375 22.9375 21.5 22.6094C25.25 20.125 27.5 16 27.5 11.5C27.5 7.04688 25.25 2.92188 21.5 0.4375ZM23 11.5C23 8.54688 21.4531 5.82812 18.9688 4.1875C18.4531 3.85938 17.75 4 17.4219 4.5625C17.0938 5.07812 17.2344 5.78125 17.75 6.10938C19.625 7.28125 20.75 9.34375 20.75 11.5C20.75 13.7031 19.625 15.7656 17.75 16.9375C17.2344 17.2656 17.0938 17.9688 17.4219 18.4844C17.7031 19 18.4062 19.1875 18.9688 18.8594C21.4531 17.2188 23 14.5 23 11.5ZM16.3438 7.9375C15.7812 7.60938 15.125 7.79688 14.7969 8.35938C14.5156 8.92188 14.7031 9.57812 15.2656 9.90625C15.8281 10.2344 16.25 10.8438 16.25 11.5C16.25 12.2031 15.8281 12.8125 15.2656 13.1406C14.7031 13.4688 14.5156 14.125 14.7969 14.6875C15.125 15.25 15.7812 15.4375 16.3438 15.1094C17.6562 14.4062 18.5 13 18.5 11.5C18.5 10.0469 17.6562 8.64062 16.3438 7.9375Z" fill="#121C51" />
                    </svg>
                    <span class="link-text">Aduan</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= BASEURL; ?>about" class="nav-link">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0.875C5.57812 0.875 0.375 6.125 0.375 12.5C0.375 18.9219 5.57812 24.125 12 24.125C18.375 24.125 23.625 18.9219 23.625 12.5C23.625 6.125 18.375 0.875 12 0.875ZM12 6.03125C13.0781 6.03125 13.9688 6.92188 13.9688 8C13.9688 9.125 13.0781 9.96875 12 9.96875C10.875 9.96875 10.0312 9.125 10.0312 8C10.0312 6.92188 10.875 6.03125 12 6.03125ZM14.625 17.9375C14.625 18.2656 14.3438 18.5 14.0625 18.5H9.9375C9.60938 18.5 9.375 18.2656 9.375 17.9375V16.8125C9.375 16.5312 9.60938 16.25 9.9375 16.25H10.5V13.25H9.9375C9.60938 13.25 9.375 13.0156 9.375 12.6875V11.5625C9.375 11.2812 9.60938 11 9.9375 11H12.9375C13.2188 11 13.5 11.2812 13.5 11.5625V16.25H14.0625C14.3438 16.25 14.625 16.5312 14.625 16.8125V17.9375Z" fill="#121C51" />
                    </svg>
                    <span class="link-text">Tentang</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="
                <?php
                if (isset($_SESSION['email'])) echo BASEURL . "profil";
                else echo BASEURL . "auth";
                ?>
                " class="nav-link">
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="space-shuttle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-space-shuttle fa-w-20 fa-5x">
                        <g class="fa-group">
                            <path fill="currentColor" d="M32 416c0 35.35 21.49 64 48 64h16V352H32zm154.54-232h280.13L376 168C243 140.59 222.45 51.22 128 34.65V160h18.34a45.62 45.62 0 0 1 40.2 24zM32 96v64h64V32H80c-26.51 0-48 28.65-48 64zm114.34 256H128v125.35C222.45 460.78 243 371.41 376 344l90.67-16H186.54a45.62 45.62 0 0 1-40.2 24z" class="fa-secondary"></path>
                            <path fill="currentColor" d="M592.6 208.24C559.73 192.84 515.78 184 472 184H186.54a45.62 45.62 0 0 0-40.2-24H32c-23.2 0-32 10-32 24v144c0 14 8.82 24 32 24h114.34a45.62 45.62 0 0 0 40.2-24H472c43.78 0 87.73-8.84 120.6-24.24C622.28 289.84 640 272 640 256s-17.72-33.84-47.4-47.76zM488 296a8 8 0 0 1-8-8v-64a8 8 0 0 1 8-8c31.91 0 31.94 80 0 80z" class="fa-primary"></path>
                        </g>
                    </svg>';
                    } else {
                        echo '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>';
                    }
                    ?>

                </a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="container h-100 d-flex justify-content-center align-items-center">