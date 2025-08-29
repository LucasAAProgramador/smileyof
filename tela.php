<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Alencar - Designer & Desenvolvedor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>


<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <!-- Substitua pelo caminho da sua logo -->
                <img src="assets/img/FAUSTINO HAMBURGUERIA (1).png" alt="Lucas Alencar" class="logo-img">
                <div class="logo-text">Lucas<span>Alencar</span></div>
            </div>
            
            <ul class="nav-links">
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="#social">Redes Sociais</a></li>
            </ul>
            
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
            <div class="hero-content">
                <div class="hero-badge">Disponível para projetos</div>
                <h1 class="animated-text">Transformando ideias em <span>realidade digital</span></h1>
                <div class="typing-text" id="typing-text"></div>
                <div class="hero-buttons">
                    <a href="#portfolio" class="btn">Ver Trabalhos</a>
                    <a href="#social" class="btn btn-secondary">Me Siga</a>
                </div>
            </div>
            
            <div class="hero-image">
                <div class="image-container">
                    <!-- Substitua pelo caminho da sua imagem -->
                    <img src="assets/img/lucas.png" alt="Lucas Alencar">
                </div>
            </div>
        </div>
        
        <div class="scroll-down">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>Sobre <span>Mim</span></h2>
            
            <div class="about-container">
                <div class="about-text">
                    <h3>Designer & Desenvolvedor com Paixão por Criatividade</h3>
                    <p>Sou um profissional dedicado à criação de experiências digitais excepcionais. Com formação em Design e especialização em desenvolvimento front-end, combino o melhor dos dois mundos para entregar projetos visualmente impressionantes e tecnicamente sólidos.</p>
                    <p>Minha abordagem combina atenção aos detalhes, pensamento estratégico e paixão por inovação, sempre buscando superar as expectativas dos clientes.</p>
                    
                    <div class="skills">
                        <h4>Minhas Habilidades</h4>
                        
                        <div class="skill-bars">
                            <div class="skill-bar">
                                <div class="skill-info">
                                    <span class="skill-name">Designer Grafico</span>
                                    <span class="skill-percent">95%</span>
                                </div>
                                <div class="skill-progress">
                                    <span data-width="95%"></span>
                                </div>
                            </div>
                            
                            <div class="skill-bar">
                                <div class="skill-info">
                                    <span class="skill-name">Desenvolvimento Front-end</span>
                                    <span class="skill-percent">90%</span>
                                </div>
                                <div class="skill-progress">
                                    <span data-width="90%"></span>
                                </div>
                            </div>
                            
                            <div class="skill-bar">
                                <div class="skill-info">
                                    <span class="skill-name">Edição de Vídeo</span>
                                    <span class="skill-percent">85%</span>
                                </div>
                                <div class="skill-progress">
                                    <span data-width="85%"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="about-cards">
                    <div class="about-card">
                        <i class="fas fa-medal"></i>
                        <h4>Experiência</h4>
                        <p>5+ anos criando soluções digitais inovadoras para clientes de diversos segmentos.</p>
                    </div>
                    
                    <div class="about-card">
                        <i class="fas fa-project-diagram"></i>
                        <h4>Projetos</h4>
                        <p>150+ projetos entregues com excelência e atenção aos detalhes.</p>
                    </div>
                    
                    <div class="about-card">
                        <i class="fas fa-users"></i>
                        <h4>Clientes</h4>
                        <p>50+ clientes satisfeitos com soluções personalizadas e eficazes.</p>
                    </div>
                    
                    <div class="about-card">
                        <i class="fas fa-lightbulb"></i>
                        <h4>Inovação</h4>
                        <p>Sempre buscando as melhores tecnologias e tendências do mercado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2>Meus <span>Serviços</span></h2>
            <p class="services-intro">Ofereço soluções completas em design e desenvolvimento para impulsionar sua presença digital com criatividade e inovação.</p>
            
            <div class="services-container">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Designer Grafico</h3>
                    <p>Crio designs modernos e criativos, unindo estética e estratégia para transmitir sua identidade com impacto.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Artes criativas com alto nível de detalhes</li>
                        <li><i class="fas fa-check"></i> Maior personalização</li>
                        <li><i class="fas fa-check"></i> Da forma que o cliente pedir</li>
                        <li><i class="fas fa-check"></i> Variações de layout</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Desenvolvimento Web</h3>
                    <p>Desenvolvo sites e aplicações web modernas, rápidas e com as melhores práticas do mercado.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Sites responsivos</li>
                        <li><i class="fas fa-check"></i> Aplicações web</li>
                        <li><i class="fas fa-check"></i> Personalização do site</li>
                        <li><i class="fas fa-check"></i> Garantia de 3 meses</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <h3>Edição de Vídeo</h3>
                    <p>Produzo e edito vídeos criativos que contam histórias e engajam seu público-alvo.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Edição da maneira do cliente</li>
                        <li><i class="fas fa-check"></i> Video Grande ou Curto</li>
                        <li><i class="fas fa-check"></i> Correção de cor</li>
                        <li><i class="fas fa-check"></i> Efeitos visuais</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2>Meu <span>Portfólio</span></h2>
            
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="design">Design</button>
                <button class="filter-btn" data-filter="development">Desenvolvimento</button>
                <button class="filter-btn" data-filter="editing">Edição</button>
            </div>
            
            <div class="portfolio-grid">
                <!-- Projeto 1 -->
                <div class="portfolio-item" data-category="design">
                    <img src="assets/img/rio.png" alt="Projeto Design 1" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Redesign de App</h3>
                        <p>Interface moderna e intuitiva para aplicativo mobile</p>
                        <div class="portfolio-actions">
                            <a href="#" class="portfolio-btn"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Projeto 2 -->
                <div class="portfolio-item" data-category="development">
                    <img src="assets/img/sab.png" alt="Projeto Desenvolvimento 1" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>E-commerce Completo</h3>
                        <p>Loja virtual com painel administrativo integrado</p>
                        <div class="portfolio-actions">
                            <a href="#" class="portfolio-btn"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Modal de Imagem/Vídeo do Portfólio -->
<div id="portfolio-modal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.8); justify-content:center; align-items:center; z-index:2000;">
    <span id="close-modal" style="position:absolute; top:30px; right:40px; color:#fff; font-size:2rem; cursor:pointer;">&times;</span>
    <img id="modal-img" src="" alt="Projeto" style="max-width:90vw; max-height:80vh; border-radius:15px; box-shadow:0 10px 40px #0008; display:none;">
    <video id="modal-video" controls style="max-width:90vw; max-height:80vh; border-radius:15px; box-shadow:0 10px 40px #0008; display:none;">
        <source id="modal-video-src" src="" type="video/mp4">
        Seu navegador não suporta vídeo.
    </video>
</div>

<!-- Projeto 3 -->
<div class="portfolio-item" data-category="editing">
    <img src="assets/img/Texto do seu parágrafo (2).png" alt="Projeto Edição 1" class="portfolio-img">
    <div class="portfolio-overlay">
        <h3>Vídeo Promocional</h3>
        <p>Edição creativa com motion graphics</p>
        <div class="portfolio-actions">
            <a href="#" class="portfolio-btn" data-video="assets/vdo/protagonista.mp4"><i class="fas fa-eye"></i></a>
        </div>
    </div>
</div>
                
                <!-- Projeto 4 -->
                <div class="portfolio-item" data-category="design">
                    <img src="assets/img/Dia mundial da bicicleta  post instagram marrom e branco.png" alt="Projeto Design 2" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Identidade Visual</h3>
                        <p>Desenvolvimento de marca completa</p>
                        <div class="portfolio-actions">
                            <a href="#" class="portfolio-btn"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Projeto 5 -->
                <div class="portfolio-item" data-category="development">
                    <img src="assets/img/Não esqueça o petisco do seu Amigo!.png" alt="Projeto Desenvolvimento 2" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Dashboard Analytics</h3>
                        <p>Painel de métricas e visualização de dados</p>
                        <div class="portfolio-actions">
                            <a href="#" class="portfolio-btn"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Projeto 6 -->
                <div class="portfolio-item" data-category="editing">
                    <img src="assets/img/portfolio/edit2.jpg" alt="Projeto Edição 2" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h3>Série de Vídeos</h3>
                        <p>Edição e pós-produção de conteúdo serial</p>
                        <div class="portfolio-actions">
                            <a href="#" class="portfolio-btn"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section id="social" class="social-media">
        <div class="container">
            <h2>Minhas <span>Redes Sociais</span></h2>
            <p class="social-intro">Me siga nas redes sociais para acompanhar meus trabalhos, dicas e novidades do mundo do design e desenvolvimento.</p>
            
            <div class="social-container">
                <div class="social-card whatsapp">
                    <div class="social-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp</h3>
                    <p>Entre em contato diretamente para orçamentos e conversas mais ágeis.</p>
                    <a href="https://wa.me/5511953511114" class="social-link" target="_blank">Enviar Mensagem</a>
                </div>
                
                <div class="social-card instagram">
                    <div class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>Instagram</h3>
                    <p>Acompanhe meu trabalho diário, stories e novidades no Instagram.</p>
                    <a href="https://www.instagram.com/Smiley._of/" class="social-link" target="_blank">Seguir</a>
                </div>
                
                <div class="social-card linkedin">
                    <div class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <h3>LinkedIn</h3>
                    <p>Conecte-se comigo profissionalmente e veja minha trajetória.</p>
                    <a href="https://www.linkedin.com/in/lucasalencar1001/" class="social-link" target="_blank">Conectar</a>
                </div>
                
                <div class="social-card github">
                    <div class="social-icon">
                        <i class="fab fa-github"></i>
                    </div>
                    <h3>GitHub</h3>
                    <p>Confira meus projetos de desenvolvimento e contribuições.</p>
                    <a href="https://github.com/LucasAAProgramador" class="social-link" target="_blank">Ver Projetos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <div class="logo">
                        <img src="assets/img/FAUSTINO HAMBURGUERIA (1).png" alt="Lucas Alencar" class="logo-img">
                        <div class="logo-text">Lucas<span>Alencar</span></div>
                    </div>
                    <p>Transformando ideias em experiências digitais excepcionais através do design e desenvolvimento criativo.</p>
                    <div class="footer-social">
                        <a href="https://wa.me/5511953511114" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/Smiley._of/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/lucasalencar1001/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/LucasAAProgramador" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h4>Links Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Início</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#portfolio">Portfólio</a></li>
                        <li><a href="#social">Redes Sociais</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>Serviços</h4>
                    <ul class="footer-links">
                        <li><a href="#services">Designer Grafico</a></li>
                        <li><a href="#services">Desenvolvimento Web</a></li>
                        <li><a href="#services">Edição de Vídeo</a></li>
                        <li><a href="#services">Motion Graphics</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Lucas Alencar. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Contact Button -->
    <div class="contact-float">
        <div class="contact-buttons" id="contact-buttons">
            <a href="https://wa.me/5511953511114" class="contact-btn whatsapp" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.instagram.com/lucasalencar.design/" class="contact-btn instagram" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/lucasalencar1001/" class="contact-btn linkedin" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/LucasAAProgramador" class="contact-btn github" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <div class="contact-main-btn" id="contact-main-btn">
            <i class="fas fa-comment-dots"></i>
        </div>
    </div>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

</body>
</html>