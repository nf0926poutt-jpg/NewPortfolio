
<nav class="breadcrumbContainer">
    <ul class="breadcrumbList">
        <li class="breadcrumbItem">
            <a href="/OkinawaTravel/index.php">Top</a>
        </li>
        <?php if (isset($pageTitle)): ?>
            <li class="breadcrumbItem">
                <span><?php echo $pageTitle; ?></span>
            </li>
        <?php endif; ?>
    </ul>
</nav>