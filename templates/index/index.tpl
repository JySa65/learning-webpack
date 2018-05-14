{extends file="base.tpl"}

{block name=title}Pagina Principal Del Sistema{/block}

{block name=context}
<!-- navigations -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="index.html" class="navbar-brand">Bpubli_Health</a>

        <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarCollapse">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#home-section" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#info-section" class="nav-link">Information</a>
            </li>
            <li class="nav-item">
                <a href="#contact-section" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="#!" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</nav>
<section class="row">
    <div class="col-md-12">
        <img src="src/img/1.png" alt="" style="width: 100vw; height: 100vh; ">
    </div>
</section>
{/block}