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
        'email' => 'roberto.rhd@gmail.com',
        'about'     => '<p>Formação em Análise e Desenvolvimento de Sistemas e pós graduação em Tecnologias aplicadas a Sistemas de Informação, ambas pela Faculdade UniRitter. </p>  
            Já fui lider Técnico, de Infraestrutura e lider de equipe, sendo responsável pelo setor de Back-end da Perverte, última empresa que trabalhei, durante mais de 5 anos. </br>
            <p>Atuo no mercado de desenvolvimento há mais de 7 anos, já passei por desenvolvimento focado tanto no Back-end quanto no Front-end, 
            atualmente atuo nas duas áreas como Full Stack Developer. </p>
            <p>Lá desenvolvi também sistemas de grande porte e portais como o Portal de Exames do Cooperado e Beneficiário da Unimed NERS, que têm milhares de usuários e cooperados utilizando a ferramenta.</p>                
            <p>Estou constantemente me aperfeiçoando fazendo cursos e indo em eventos, sou apaixonado pela área. <br/>
            Atualmente trabalho como Freelancer, mas estou aberto a vagas de desenvolvimento.</p>',
        'frontend'  =>  [
            ['name'=> 'HTML 5', 'width'=> '150', 'image'=> 'html.png'],
            ['name'=> 'CSS 3', 'width'=> '110', 'image'=> 'css3.png'],
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
            'text' => 'Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC. Desenvolvemos um CMS personalizado para lidar com o conteúdo em seis idiomas: Inglês, polonês, húngaro, esloveno, checo e romani. Também participei do desenvolvimento de várias       animações do site.<br/><br/>
            Agência Perverte', 
            'image'=> 'wwf.jpg',
            'involvement' => ['HTML 5', 'CSS 3', 'Animações', 'JQuery', 'C#', '.NET', 'BackBone JS', 'Require JS', 'MVC', 'SQL Server']
            ],
            [
            'name'=> 'Perverte', 
            'link'=>'http://perverte.me', 
                'text' => 'Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC, site dois idiomas. Também fui o responsável pela publicação do site. <br/> <br/>
            Agência Perverte', 
            'image'=> 'perverte.jpg',
            'involvement' => ['HTML 5', 'JQuery', 'C#', '.NET', 'BackBone JS', 'Require JS', 'MVC', 'SQL Server']
            ],
            [
            'name'=> 'Class Advisor', 
            'link'=>'http://www.classadvisor.com.br', 
            'text' => 'CTO e Full Stack Developer, fazendo todo o HTML, CSS e JavaScript. Desenvolvemos também a API REST no framework Laravel.', 
            'image'=> 'classadvisor.jpg',
            'involvement' => ['HTML 5', 'CSS 3', 'Sass', 'JavaScript', 'AngularJS', 'PHP', 'Laravel', 'SEO', 'Webpack', 'MySql']
            ],
            [
            'name'=> 'Promob Arch Plus', 
            'link'=>'http://archplus.promob.com/', 
            'text' => 'Desenvolvimento das animações.Também fui o responsável pela publicação do site. <br/> <br/>
                        Agência Perverte', 
            'image'=> 'archplus.jpg',
            'involvement' => ['HTML 5', 'CSS 3', 'JavaScript', 'JQuery', 'Animações', '.NET', 'C#']
            ],
            [
            'name'=> 'Florense', 
            'link'=>'http://www.florense.com/', 
            'text' => 'Desenvolvimento do CMS de gerenciamento do site em 3 idiomas, trabalhei também na integração.</br> 
                        Na seção "Onde Encontrar" fizemos geolocalização pelo IP do usuário para buscar as lojas mais próximas dele. </br>
                        Desenvolvi todas as galerias de imagens do site em JQuery e JavaScript. <br/><br/>
                        Também fui o responsável pela publicação do site.<br/><br/>
                        Agência Perverte', 
            'image'=> 'florense.jpg',
            'involvement' => ['CSS', 'JavaScript', 'JQuery', 'Animações', '.NET', 'C#', 'SQL Server', 'Require JS', 'Google Maps API']
            ],
            [
            'name'=> 'Nova Marca', 
            'link'=>'http://www.novamarcaimoveis.com/', 
            'text' => 'Repaginação de todo o Front-end do site.', 
            'image'=> 'novamarca.jpg',
            'involvement' => ['HTML 5', 'CSS 3', 'JavaScript', 'JQuery', 'Animações', 'PHP', 'MySQL']
            ],                           
        ]    
    ];

    public $ricardo = [
        'slug'      => 'ricardo-hofstetter-dias',
        'buffs'     => ['html5', 'css3', 'js', 'angular'],
        'name'      => 'Ricardo Hofstetter Dias',
        'role'      => 'Full Stack Web Developer',
        'facebook' => 'https://www.facebook.com/beto.dias.129',
        'linkedin' => 'https://www.linkedin.com/in/robertorhd',
        'email' => 'roberto.rhd@gmail.com',
        'about'     => '<p>Formação em Análise e Desenvolvimento de Sistemas e pós graduação em Tecnologias aplicadas a Sistemas de Informação, ambas pela Faculdade UniRitter. </p>  
            Já fui lider Técnico, de Infraestrutura e lider de equipe, sendo responsável pelo setor de Back-end da Perverte, última empresa que trabalhei, durante mais de 5 anos. </br>
            <p>Atuo no mercado de desenvolvimento há mais de 7 anos, já passei por desenvolvimento focado tanto no Back-end quanto no Front-end, 
            atualmente atuo nas duas áreas como Full Stack Developer. </p>
            <p>Lá desenvolvi também sistemas de grande porte e portais como o Portal de Exames do Cooperado e Beneficiário da Unimed NERS, que têm milhares de usuários e cooperados utilizando a ferramenta.</p>                
            <p>Estou constantemente me aperfeiçoando fazendo cursos e indo em eventos, sou apaixonado pela área. <br/>
            Atualmente trabalho como Freelancer, mas estou aberto a vagas de desenvolvimento.</p>',
        'frontend'  =>  [
            ['name'=> 'HTML 5', 'width'=> '150', 'image'=> 'html.png'],
            ['name'=> 'CSS 3', 'width'=> '110', 'image'=> 'css3.png'],
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
                'text' => 'Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC. Desenvolvemos um CMS personalizado para lidar com o conteúdo em seis idiomas: Inglês, polonês, húngaro, esloveno, checo e romani. Também participei do desenvolvimento de várias       animações do site.<br/><br/>
                Agência Perverte', 
                'image'=> 'wwf.jpg',
                'involvement' => ['HTML 5', 'CSS 3', 'Animações', 'JQuery', 'C#', '.NET', 'BackBone JS', 'Require JS', 'MVC', 'SQL Server']
            ],
            [
                'name'=> 'Perverte', 
                'link'=>'http://perverte.me', 
                    'text' => 'Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC, site dois idiomas. Também fui o responsável pela publicação do site. <br/> <br/>
                Agência Perverte', 
                'image'=> 'perverte.jpg',
                'involvement' => ['HTML 5', 'JQuery', 'C#', '.NET', 'BackBone JS', 'Require JS', 'MVC', 'SQL Server']
            ],
            [
                'name'=> 'Class Advisor', 
                'link'=>'http://www.classadvisor.com.br', 
                'text' => 'CTO e Full Stack Developer, fazendo todo o HTML, CSS e JavaScript. Desenvolvemos também a API REST no framework Laravel.', 
                'image'=> 'classadvisor.jpg',
                'involvement' => ['HTML 5', 'CSS 3', 'Sass', 'JavaScript', 'AngularJS', 'PHP', 'Laravel', 'SEO', 'Webpack', 'MySql']
            ],
            [
                'name'=> 'Promob Arch Plus', 
                'link'=>'http://archplus.promob.com/', 
                'text' => 'Desenvolvimento das animações.Também fui o responsável pela publicação do site. <br/> <br/>
                            Agência Perverte', 
                'image'=> 'archplus.jpg',
                'involvement' => ['HTML 5', 'CSS 3', 'JavaScript', 'JQuery', 'Animações', '.NET', 'C#']
            ],
            [
                'name'=> 'Florense', 
                'link'=>'http://www.florense.com/', 
                'text' => 'Desenvolvimento do CMS de gerenciamento do site em 3 idiomas, trabalhei também na integração.</br> 
                            Na seção "Onde Encontrar" fizemos geolocalização pelo IP do usuário para buscar as lojas mais próximas dele. </br>
                            Desenvolvi todas as galerias de imagens do site em JQuery e JavaScript. <br/><br/>
                            Também fui o responsável pela publicação do site.<br/><br/>
                            Agência Perverte', 
                'image'=> 'florense.jpg',
                'involvement' => ['CSS', 'JavaScript', 'JQuery', 'Animações', '.NET', 'C#', 'SQL Server', 'Require JS', 'Google Maps API']
            ],
            [
                'name'=> 'Nova Marca', 
                'link'=>'http://www.novamarcaimoveis.com/', 
                'text' => 'Repaginação de todo o Front-end do site.', 
                'image'=> 'novamarca.jpg',
                'involvement' => ['HTML 5', 'CSS 3', 'JavaScript', 'JQuery', 'Animações', 'PHP', 'MySQL']
            ],                           
        ]    
    ];
}
