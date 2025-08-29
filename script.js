       // Efeito de digitação
       
        const texts = [
            "Designer & Desenvolvedor Front-end",
            "Especialista em Edição de Vídeo",
            "Criativo & Inovador"
        ];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingDelay = 100;
        let erasingDelay = 50;
        let newTextDelay = 2000;
        let timer;

        function typeEffect() {
            const currentText = texts[textIndex];
            
            if (isDeleting) {
                document.getElementById("typing-text").textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
                typingDelay = erasingDelay;
            } else {
                document.getElementById("typing-text").textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
                typingDelay = 100;
            }
            
            if (!isDeleting && charIndex === currentText.length) {
                isDeleting = true;
                typingDelay = newTextDelay;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex++;
                if (textIndex === texts.length) textIndex = 0;
                typingDelay = 500;
            }
            
            setTimeout(typeEffect, typingDelay);
        }

        // Navegação responsiva
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');

        burger.addEventListener('click', () => {
            nav.classList.toggle('active');
            burger.classList.toggle('active');
            
            // Animação dos links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                }
            });
        });

        // Scroll suave
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                if (this.getAttribute('href') === '#') return;
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Fechar menu mobile após clique
                    if (nav.classList.contains('active')) {
                        nav.classList.remove('active');
                        burger.classList.remove('active');
                    }
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            const backToTop = document.getElementById('back-to-top');
            
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
                backToTop.classList.add('active');
            } else {
                header.classList.remove('scrolled');
                backToTop.classList.remove('active');
            }
        });

        // Botão voltar ao topo
        document.getElementById('back-to-top').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Botão flutuante de contato
        document.getElementById('contact-main-btn').addEventListener('click', () => {
            document.getElementById('contact-buttons').classList.toggle('active');
        });

        // Filtro do portfólio
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remover classe active de todos os botões
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Adicionar classe active ao botão clicado
                button.classList.add('active');
                
                // Obter o filtro
                const filter = button.getAttribute('data-filter');
                
                // Filtrar itens
                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

         // Modal do Portfólio
    const modal = document.getElementById('portfolio-modal');
    const modalImg = document.getElementById('modal-img');
    const closeModal = document.getElementById('close-modal');
    document.querySelectorAll('.portfolio-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const img = this.closest('.portfolio-item').querySelector('.portfolio-img');
            modalImg.src = img.src;
            modal.style.display = 'flex';
        });
    });
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        modalImg.src = '';
    });
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            modalImg.src = '';
        }
    });

        // Animação das barras de habilidades
        function animateSkills() {
            const skillBars = document.querySelectorAll('.skill-progress span');
            
            skillBars.forEach(bar => {
                const width = bar.getAttribute('data-width');
                bar.style.width = width;
            });
        }

        // Iniciar animação quando a seção estiver visível
        function checkScroll() {
            const aboutSection = document.getElementById('about');
            const aboutPosition = aboutSection.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (aboutPosition < screenPosition) {
                animateSkills();
                window.removeEventListener('scroll', checkScroll);
            }
        }

        // Inicialização
        document.addEventListener('DOMContentLoaded', () => {
            // Iniciar efeito de digitação
            setTimeout(typeEffect, 1000);
            
            // Observar scroll para animar habilidades
            window.addEventListener('scroll', checkScroll);
            
            // Verificar se a seção about já está visível ao carregar
            checkScroll();
        });
        
