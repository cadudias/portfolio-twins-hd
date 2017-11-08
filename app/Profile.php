<?php

namespace App;

class Profile
{        
    public $roberto = [ 
        'slug'      => 'roberto-hofstetter-dias',
        'buffs'     => ['html5', 'css3', 'js', 'angular'],
        'name'      => 'Roberto Hofstetter Dias',
        'role'      => 'Full Stack Web Developer',
        'facebook' => 'https://www.facebook.com/beto.dias.129',
        'linkedin' => 'https://www.linkedin.com/in/robertorhd',
        'github' => 'https://github.com/roberto-hofstetter',
        'email' => 'roberto.rhd@gmail.com',
        'about_pt'     => "<p>Formação em Análise e Desenvolvimento de Sistemas e pós graduação em Tecnologias aplicadas a Sistemas de Informação, ambas pela Faculdade UniRitter. </p>  
            Já fui lider Técnico, de Infraestrutura e lider de equipe, sendo responsável pelo setor de Back End da Perverte, última empresa que trabalhei, durante mais de 5 anos. </br>
            <p>Atuo no mercado de desenvolvimento há mais de 7 anos, já passei por desenvolvimento focado tanto no Back End quanto no Front End, 
            atualmente atuo nas duas áreas como Full Stack Developer. </p>
            <p>Na Perverte desenvolvi também sistemas de grande porte e portais como o Portal de Exames do Cooperado e Beneficiário da Unimed NERS, que têm milhares de usuários e cooperados utilizando a ferramenta.</p>                
            <p>Estou constantemente me aperfeiçoando fazendo cursos e indo em eventos, sou apaixonado pela área. Acredito que a troca de conhecimento é importante para o crescimento profissional. </p>
            <p>Atualmente trabalho como Freelancer e estou desenvolvendo o curso <a href='http://estagiocomxp.com/' target='_blank'>Estágio Com XP</a> onde vou passar conteúdos sobre desenvolvimento pessoal 
                e profissional focado na área web, principalmente pra iniciantes que estão buscando o primeiro emprego.</p>",
        'about_en'     => "<p>Technical leader and Infrastructure leader, i was responsible for the Back End team on Perverte, the last company i worked for, for more than five years. </br>
            <p> Working with development for more than 7 years now, I have been through development focused both with Back End and Front End.
            Currently I'm working in both areas as a Full Stack Developer. </p>
            <p> Developed large systems and portals like the Exams Portal for Cooperatives and beneficiaries for Unimed NERS, a big health company in Brazil, which has thousands of members and cooperators. </p>
            <p> I am constantly perfecting myself, taking courses and attendign to development events here in Brazil. I love programming and everything about the area. </p>
            <p>I'm currently working as Freelancer and developing a course called 'Estágio Com XP', to help those who are beginning ont the development market. </p>",
        'frontend'  =>  [
            ['name'=> 'HTML5', 'width'=> '150', 'image'=> 'html.png'],
            ['name'=> 'CSS3', 'width'=> '110', 'image'=> 'css3.png'],
            ['name'=> 'JavaScript', 'width'=> '130', 'image'=> 'js.png'],
            ['name'=> 'Sass', 'width'=> '130', 'image'=> 'sass.png'],
            ['name'=> 'Gulp', 'width'=> '80', 'image'=> 'gulp.png'],
            ['name'=> 'Grunt', 'width'=> '140', 'image'=> 'grunt.png'],
            ['name'=> 'NPM', 'width'=> '130', 'image'=> 'npm.png'],
            ['name'=> 'Bootstrap', 'width'=> '130', 'image'=> 'bootstrap.png'],
            ['name'=> 'Skeleton', 'width'=> '130', 'image'=> 'skeleton.jpg'],
            ['name'=> 'AngularJS', 'width'=> '130', 'image'=> 'angular.png'],
            ['name'=> 'RequireJS', 'width'=> '130', 'image'=> 'requirejs.jpg'],
            ['name'=> 'JQuery', 'width'=> '130', 'image'=> 'jquery.jpg'],
            ['name'=> 'Apache Cordova', 'width'=> '130', 'image'=> 'cordova.png'],
            ['name'=> 'Ionic', 'width'=> '130', 'image'=> 'ionic.png']
        ],
        'backend'  =>   [
            ['name'=> 'C#', 'image'=> 'csharp.png'],
            ['name'=> 'PHP', 'image'=> 'php.png'],
            ['name'=> 'Rest API', 'image'=> 'rest-api.png'],
            ['name'=> '.NET', 'image'=> 'dotnet.jpg'],
            ['name'=> 'Laravel', 'image'=> 'laravel.png']                                            
        ],
        'bds'      =>  [
            ['name'=> 'Sql Server', 'width' => '200', 'image'=> 'sqlserver.jpg'],
            ['name'=> 'MySQL', 'width' => '150', 'image'=> 'mysql.jpg'],
            ['name'=> 'Oracle', 'width' => '200', 'image'=> 'oracle.jpg'],
            ['name'=> 'IndexDB', 'width' => '150', 'image'=> 'indexdb.png'],
            ['name'=> 'SQLite', 'width' => '200', 'image'=> 'sqlite.png']
        ],
        'tools'      =>  [
            ['name'=> 'Photoshop', 'width' => '200', 'image'=> 'photoshop.png'],
            ['name'=> 'Visual Studio 2010/2015', 'width' => '150', 'image'=> 'visualstudio.png'],
            ['name'=> 'Visual Studio Code', 'width' => '160', 'image'=> 'visualstudiocode.png'],
            ['name'=> 'Sublime', 'width' => '160', 'image'=> 'sublime.png'],
            ['name'=> 'Bitbucket', 'width' => '200', 'image'=> 'bitbucket.png'],
            ['name'=> 'Vagrant', 'width' => '170', 'image'=> 'vagrant.jpg'],
            ['name'=> 'Wordpress', 'width' => '200', 'image'=> 'wordpress.png']                            
        ],
        'works'      =>  [
            [
            'name'=> 'Why Go Wild', 
            'link'=>'http://whygowild.com', 
            'text_pt' => 'Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC. Desenvolvemos um CMS personalizado para lidar com o conteúdo em seis idiomas: Inglês, polonês, húngaro, esloveno, checo e romani. Também participei do desenvolvimento de várias       animações do
                    site.<br/><br/>
                    Agência Perverte', 
            'text_en' => 'I worked on the development of the CMS and site integration in C # .NET / MVC. We developed a custom CMS to handle content in six languages: English, Polish, Hungarian, Slovenian, Czech and Romany. Also participated in the development of various site animations. <br/>
                        Agency Perverte', 
            'image'=> 'wwf.jpg',
            'involvement' => ['HTML5', 'CSS3', 'Animações', 'JQuery', 'C#', '.NET', 'BackBone JS', 'Require JS', 'MVC', 'SQL Server']
            ],
            [
            'name'=> 'Perverte', 
            'link'=>'http://perverte.me', 
            'text_pt' => 'Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC, site dois idiomas. Também fui o responsável pela publicação do site. <br/> <br/>
                        Agência Perverte', 
            'text_en' => "Development of CMS's site in two languages and website integration in C # .NET / MVC. I was also responsible for the website deployment. <br/>
                        Agency Perverte",
            'image'=> 'perverte.jpg',
            'involvement' => ['HTML5', 'JQuery', 'C#', '.NET', 'BackBone JS', 'Require JS', 'MVC', 'SQL Server']
            ],
            [
            'name'=> 'Class Advisor', 
            'link'=>'http://www.classadvisor.com.br', 
            'text_pt' => 'CTO e Full Stack Developer, fazendo todo o HTML, CSS e JavaScript. Desenvolvemos também a API REST no framework Laravel.',
            'text_en' => 'CTO and Full Stack Developer, doing all the HTML, CSS and JavaScript. We also developed the REST API using the Laravel framework', 
            'image'=> 'classadvisor.jpg',
            'involvement' => ['HTML5', 'CSS3', 'Sass', 'JavaScript', 'AngularJS', 'PHP', 'Laravel', 'SEO', 'Webpack', 'MySql']
            ],
            [
            'name'=> 'Promob Arch Plus', 
            'link'=>'http://archplus.promob.com/', 
            'text_pt' => 'Desenvolvimento das animações.Também fui o responsável pela publicação do site. <br/> <br/>
                        Agência Perverte',
            'text_en' => 'Animations Development. I was also responsible for the website deployment. <br/>
                        Agency Perverte', 
            'image'=> 'archplus.jpg',
            'involvement' => ['HTML5', 'CSS3', 'JavaScript', 'JQuery', 'Animações', '.NET', 'C#']
            ],
            [
            'name'=> 'Florense', 
            'link'=>'http://www.florense.com/', 
            'text_pt' => 'Desenvolvimento do CMS de gerenciamento do site em 3 idiomas, trabalhei também na integração.</br> 
                        Na seção "Onde Encontrar" fizemos geolocalização pelo IP do usuário para buscar as lojas mais próximas dele. </br>
                        Desenvolvi todas as galerias de imagens do site em JQuery e JavaScript. <br/><br/>
                        Também fui o responsável pela publicação do site.<br/><br/>
                        Agência Perverte', 
            'text_en' => "site's CMS development in 3 languages, also worked on the website's integration. </ br>
                        In the 'Where to Find' section we did geolocation by user IP to find the nearest stores. </ Br>
                        Developed all the site's picture galleries using JQuery and JavaScript. <br/>
                        I was also responsible for the website deployment. <br/>
                        Agency Perverte",
            'image'=> 'florense.jpg',
            'involvement' => ['CSS', 'JavaScript', 'JQuery', 'Animações', '.NET', 'C#', 'SQL Server', 'Require JS', 'Google Maps API']
            ],
            [
            'name'=> 'Nova Marca', 
            'link'=>'http://www.novamarcaimoveis.com/', 
            'text_pt' => 'Repaginação de todo o Front End do site.',
            'text_en' => 'Website Front End revamp', 
            'image'=> 'novamarca.jpg',
            'involvement' => ['HTML5', 'CSS3', 'JavaScript', 'JQuery', 'Animações', 'PHP', 'MySQL']
            ],  
            [
            'name'=> 'Curso Estágio Com XP', 
            'link'=>'http://estagiocomxp.teachable.com/', 
            'text_pt' => 'Desenvolvimento do Curso Estágio com XP. Curso Online focado pra quem está começando no mercado de trabalho web.',
            'text_en' => 'Course development Estágio Com XP. Online course focused for those who are starting at web developement.', 
            'image'=> 'estagiocomxp.png',
            'involvement' => ['HTML5', 'CSS3', 'JavaScript', 'JQuery', 'PHP']
            ],                           
        ]    
    ];



    public $ricardo = [
        'slug'      => 'ricardo-hofstetter-dias',
        'buffs'     => ['html5', 'css3', 'js', 'angular', 'php'],
        'name'      => 'Ricardo Hofstetter Dias',
        'role'      => 'Full Stack Web Developer',
        'facebook' => 'https://www.facebook.com/caduhd',
        'linkedin' => 'https://www.linkedin.com/in/ricardohdias',
        'github' => 'https://github.com/kadoohd',
        'email' => 'cadu.hd@gmail.com',
        'about_pt'     => "<p>Já tive a oportunidade de passar por muitas áreas do mercado de desenvolvimento e aprendi muito em cada uma delas.
                Trabalhei durante 6 anos em agências, 4 anos focado em Back End (.NET e PHP) e 2 anos como Front e Back-end desenvolvendo desde sites institucionais até grandes sistemas 
                internos. O melhor é que sempre me envolvi com os projetos de forma geral, fazendo comportamentos, animações, conversando com o 
                cliente e fazendo muitas vezes o papel de gerente de projeto além de desenvolvedor. Depois de passar por agências trabalhei com algumas Startups o que me deu uma boa base de trabalho dentro desse mercado.</p>
                
                <p>Também ajudei a criar o curso do <a href='http://estagiocomxp.com/' target='_blank'>Estágio Com XP</a> onde ensino sobre desenvolvimento pessoal 
                e profissional focado na área web, principalmente para iniciantes que estão buscando o primeiro emprego e ainda não sabem ao certo por onde começar ou se sentem incapacitados
                diante de todas as demandas por experiência e conhecimento do nosso mercado. </p>

                <p>Sempre que posso escrevo no <a href='https://medium.com/@caduHD' target='_blank'>Medium</a>, faço cursos e participo de eventos de desenvolvimento. 
                Acredito que participar da comunidade e trocar experiências é uma parte importante na vida do desenvolvedor.</p>

                <p>Trabalho como freelancer, se quiser tirar um projeto do papel é só entrar em contato :)</p>
                
                <p>Me formei em Análise e Desenvolvimento de Sistemas pela UniRitter em 2009. </p>",

        'about_en'     => "<p> I've had the opportunity to go through many areas of development and learned a lot in each one of them. 
        I worked for six years in agencies, four years focused on Back End (.NET and PHP) and 2 years as Front and Back End developing from large internal systems to institutional websites. 
        The good part is that i was always involved with the projects as a whole, making behaviors, animations, talking to the customer and doing often the project manager role.
        That gave me a lot of experience in many areas. </p>

            <p> Now i'm working at <a href='http://classadvisor.com.br' target='_blank'>ClassAdvisor</a> as a Full Stack Developer. Beeing part of a startup from the begining 
            gave me the opportunity to put into practice all the knowledge i have in Front End, Back End, Sysadmin putting the environment on the cloud,
                UI/UX, metrics, testing and other important parts in the life of a company that is starting to grow.</p>

            <p> I am also working on a personal project called <a href='http://estagiocomxp.com/' target='_blank'>Estágio com XP</a> (something like Internship with XP). It's a online course where you'll pass content on personal and professional development
                focused on the web, especially for beginners who are seeking their first job and are not sure where to start or feel unable
                before all the demands for experience and knowledge of our market. Here in Brazil the companies tend to be very demanding, sometimes asking for experience,
                something that the beginner is after with his first job.</p>

            <p> Whenever i can i write in <a href='https://medium.com/@caduHD' target='_blank'> Medium</a>, do courses and participate in development events.
                I believe that being a part of the community and exchange experiences is essential to any developer that wants to be better. </p>   

                <p> I'm also working as a freelancer, if you want to make something cool contact me! :) </p>

                <p>I'm graduated in Analysis and Systems Development at UniRitter in 2009.</p> 
            ",
        'frontend'  =>  [
            ['name'=> 'HTML5', 'width'=> '150', 'image'=> 'html.png'],
            ['name'=> 'CSS3', 'width'=> '110', 'image'=> 'css3.png'],
            ['name'=> 'JavaScript', 'width'=> '130', 'image'=> 'js.png'],
            ['name'=> 'Webpack', 'width'=> '130', 'image'=> 'webpack.jpg'],
            ['name'=> 'Git', 'width'=> '130', 'image'=> 'git.jpg'],
            ['name'=> 'Sass', 'width'=> '130', 'image'=> 'sass.png'],
            ['name'=> 'Gulp', 'width'=> '80', 'image'=> 'gulp.png'],
            ['name'=> 'Grunt', 'width'=> '140', 'image'=> 'grunt.png'],
            ['name'=> 'NPM', 'width'=> '130', 'image'=> 'npm.png'],
            ['name'=> 'Bootstrap', 'width'=> '130', 'image'=> 'bootstrap.png'],
            ['name'=> 'Skeleton', 'width'=> '130', 'image'=> 'skeleton.jpg'],
            ['name'=> 'AngularJS', 'width'=> '130', 'image'=> 'angular.png'],
            ['name'=> 'JQuery', 'width'=> '130', 'image'=> 'jquery.jpg']
        ],
        'backend'  =>   [
            ['name'=> 'C#', 'image'=> 'csharp.png'],
            ['name'=> 'PHP', 'image'=> 'php.png'],
            ['name'=> 'Rest API', 'image'=> 'rest-api.png'],
            ['name'=> '.NET', 'image'=> 'dotnet.jpg'],
            ['name'=> 'Laravel', 'image'=> 'laravel.png'],
            ['name'=> 'Lumen', 'image'=> 'lumen.png']                                                
        ],
        'bds'      =>  [
            ['name'=> 'Sql Server', 'width' => '200', 'image'=> 'sqlserver.jpg'],
            ['name'=> 'MySQL', 'width' => '150', 'image'=> 'mysql.jpg'],
            ['name'=> 'SQLite', 'width' => '200', 'image'=> 'sqlite.png']
        ],
        'tools'      =>  [
            ['name'=> 'Photoshop', 'width' => '200', 'image'=> 'photoshop.png'],
            ['name'=> 'Visual Studio 2010/2015', 'width' => '150', 'image'=> 'visualstudio.png'],
            ['name'=> 'Visual Studio Code', 'width' => '160', 'image'=> 'visualstudiocode.png'],
            ['name'=> 'Sublime', 'width' => '160', 'image'=> 'sublime.png'],
            ['name'=> 'Bitbucket', 'width' => '200', 'image'=> 'bitbucket.png'],
            ['name'=> 'Vagrant', 'width' => '170', 'image'=> 'vagrant.jpg'],
            ['name'=> 'Wordpress', 'width' => '200', 'image'=> 'wordpress.png']                            
        ],
        'works'      =>  [
            [
            'name'=> 'Why Go Wild', 
            'link'=>'http://www.whygowild.com/en/fair-wild-case-studies', 
            'text_pt' => 'Integração com Api do Google Maps, estilizações de Mapa, clusters e pins.<br/><br/>
                    Agência Perverte', 
            'text_en' => 'Google Maps API integration, styles, clusters and pins. <br/><br/>
                        Perverte Agency', 
            'image'=> 'wwf.jpg',
            'involvement' => ['Google Maps API', 'JavaScript', '.NET', 'C#']
            ],
            [
            'name'=> 'Florense', 
            'link'=>'http://www.florense.com.br/pt', 
            'text_pt' => 'Participei do desenvolvimento do sistema de gerenciamento de conteúdo, das traduções e integração do blog, produtos, 
            mapa de franquias e do formulário de contato <br/> <br/>

            Comportamento do slider de 4 colunas do rodapé utilizando jQuery. <br/> <br/>

            Integração do mapa de Franquias com Api do Google Maps, estilizações de mapa e animações de pin <br/> <br/>

                        Agência Perverte', 

            'text_en' => "I’ve participated in the development of the CMS, i18n, blog integrations, products, franchises map and contact form. <br/> <br/>

            4 columns footer slide behaviour using jQuery.  <br/> <br/>


            Google Maps API franchises map integration, styles, clusters and pin animations  <br/> <br/>

                        Perverte Agency",

            'image'=> 'florense.jpg',
            'involvement' => ['HTML5', 'JQuery', 'C#', '.NET', 'Google Maps API', 'BackBone JS', 'Require JS', 'MVC', 'SQL Server']
            ],
            [
                'name'=> 'Medicina Preventiva - Unimed NERS', 
                'link'=>'http://medicinapreventiva.unimed-ners.coop.br/', 
                'text_pt' => 'Participei do desenvolvimento do sistema de gerenciamento de conteúdo, das traduções e integrações gerais incluindo a busca. <br/> <br/>
                Participei do desenvolvimento das animações da home. <br/> <br/>
                Agência Perverte',
                'text_en' => 'I’ve participated in the development of the CMS, i18n and overall integrations including the site search. <br/> <br/>
                I’ve participated in the animations in the homepage.<br/> <br/>
                 Perverte Agency',
                 'image' => 'medicina.jpg',
                 'involvement' => ['HTML5', 'CSS3', 'JavaScript', 'C#', '.NET']
            ],
            [
            'name'=> 'Class Advisor', 
            'link'=>'http://www.classadvisor.com.br', 
            'text_pt' => 'Trabalho como Lead Developer tanto no Front quanto no Back End. Tenho aprendido muito com esse projeto e pretendo continuar melhorando os pontos nos quais ainda estou insatisfeito. 
            <br/> <br/>
            Decidimos por desenvolver um modelo MVP do site em AngularJS por estarmos mais familiarizados e para diminuir ao máximo o tempo de entrega do site já que estamos em fase de validação. Com isso conseguimos entregar uma versão 100% funcional em 3 meses.
            <br/> <br/>
            O próximo passo é melhorarmos a cobertura de testes do projeto e automatizar mais o deploy pro ambiente de produção na cloud.
            <br/> <br/>
            Pro back-end foi desenvolvido um Rest API em PHP utilizando Laravel 5 e como banco de dados o MySQL.',
            'text_en' => "I'm currently working as Lead Developer both in Front and in the Back End. I’m also leading the deployment to the cloud using Locaweb’s Jelastic. I have learned a lot from this project and plan to continue improving the points in which I'm still dissatisfied.
            <br/> <br/>
            We decided to develop a MVP model of the website using angular because we are more familiar with it and to reduce the delivery time of the site since we are in the validation phase. With that we were able to deliver a 100% working version in 3 months.
            <br/> <br/>
            The next step is to improve the project's test coverage and enhance deploy to the production environment.
            <br/> <br/>
            The backend was developed in PHP using Laravel 5 and as database we used MySQL.
            ", 
            'image'=> 'classadvisor.jpg',
            'involvement' => ['HTML5', 'CSS3', 'Sass', 'JavaScript', 'AngularJS', 'PHP', 'Laravel', 'SEO', 'Webpack', 'MySql']
            ],
            [
            'name'=> 'Nova Marca', 
            'link'=>'http://www.novamarcaimoveis.com/', 
            'text_pt' => 'Repaginação de todo o Front End do site.',
            'text_en' => 'Website Front End revamp', 
            'image'=> 'novamarca.jpg',
            'involvement' => ['HTML5', 'CSS3', 'PHP', 'MySQL']
            ], 
            [
            'name'=> 'Estágio com XP', 
            'link'=>'http://estagiocomxp.com/', 
            'text_pt' => 'Projeto pessoal onde vou passar todo o conhecimento que adquiri como desenvolvedor Full Stack em agências, freelas e projetos paralelos. <br/> <br/>

            Serão mais de 50 vídeos abordando os assuntos básicos necessários para desenvolver para a web, além de dicas de como se portar no mercado. Serão vídeos curtos, de 10 até 30 minutos, por acreditarmos que isso facilita o aprendizado e a vontade de estudar.
            <br/> <br/>

            Com isso queremos preparar melhor os iniciantes na área pra que eles entrem confiantes no mercado de trabalho e possam ajudar as empresas com eficiência e em menos tempo.

            <br/> <br/>',
            'text_en' => 'Personal project where I’ll share all the knowledge I acquired as Full Stack Developer in agencies, side projects and as a freelancer. <br/><br/>
            There will be more than 50 videos covering the basic subjects needed to develop for the web, plus tips on how to behave in any company and with your team. Will be short videos, 10 to 30 minutes, because we believe that it facilitates learning and the desire to study.
            <br/><br/>
            By this we’ll better prepare newcomers to the development area increasing their confidence and preparing them to aid companies efficiently and in less time.
            <br/><br/>', 
            'image'=> 'estagiocomxp.jpg',
            'involvement' => ['HTML5', 'CSS3', 'PHP', 'JavaScript']
            ]
                                      
        ]    
    ];
}
