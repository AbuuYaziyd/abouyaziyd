
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="<?= base_url() ?>" class="navbar-brand mx-auto mx-lg-0"><?= lang('app.appName') ?></a>

                <div class="d-flex align-items-center d-lg-none">
                    <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn custom-btn custom-link btn-secondary">
                            <i class="bi bi-whatsapp"></i>
                        </button>
                        <button type="button" class="btn custom-btn custom-link btn-secondary">
                            <i class="bi bi-telephone-outbound"></i>
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#home"><?= lang('app.home') ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#about"><?= lang('app.about') ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#services"><?= lang('app.services') ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#project"><?= lang('app.projects') ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#contact"><?= lang('app.contact') ?></a>
                        </li>
                    </ul>

                    <div class="d-lg-flex align-items-center d-none ms-auto">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn custom-btn btn-secondary">
                                <i class="bi bi-whatsapp"></i>
                            </button>
                            <button type="button" class="btn custom-btn btn-secondary">
                                <i class="bi bi-translate"></i>
                            </button>
                            <button type="button" class="btn custom-btn btn-secondary">
                                <i class="bi bi-telephone-outbound"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </nav>