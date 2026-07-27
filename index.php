<?php
// Memanggil bagian header
include 'includes/head.php';
?>

<body class="bg-slate-950 text-white overflow-x-hidden">

    <!-- Background Galaxy -->
    <div id="galaxy-background"></div>

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <main>

        <!-- Hero Section -->
        <?php include 'pages/home.php'; ?>

        <!-- About -->
        <?php include 'pages/about.php'; ?>

        <!-- Skills -->
        <?php include 'pages/skills.php'; ?>

        <!-- Projects -->
        <?php include 'pages/projects.php'; ?>

        <!-- Experience -->
        <?php include 'pages/experience.php'; ?>

        <!-- Certificates -->
        <?php include 'pages/certificates.php'; ?>

        <!-- Contact -->
        <?php include 'pages/contact.php'; ?>

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Javascript -->
    <?php include 'includes/scripts.php'; ?>

</body>
</html>