<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<!-- Isinya tentang ekstensi yang dipakai dalam sebuah website -->
<!-- Components masuknya ke partials -->

<?php include 'partials/head.php' ?>

<!-- Head -->

<!-- Body -->
<!-- Isi dari website -->

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <!-- Biasanya ada diatas sebuah website yang fungsinya untuk memindahkan halaman -->
        <?php include 'components/navigation.php' ?>

        <!-- kita akan pakai switch case untuk memindahkan halaman -->
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : "home";
        switch ($page) {
            // Home
            // case adalah perintahh untuk menamai sebuah halamannya
            case 'home':
                include 'pages/home.php';
                // untuk menahan halamannya
                break;
            case 'resume':
                include 'pages/resume.php';
                break;
            case 'project':
                include 'pages/project.php';
                break;
            case 'contact':
                include 'pages/contact.php';
                break;
            default:
                include 'pages/home.php';
                break;
        }

        ?>

    </main>
    <!-- Footer-->
    <?php include 'components/footer.php' ?>

    <!-- Script -->
    <?php include 'partials/script.php' ?>
</body>

<!-- Isi dari website -->

</html>