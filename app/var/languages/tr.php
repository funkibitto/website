<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'İngilizce',
        'download'                        => 'Phalcon\'u İndir',
        'documentation'                   => 'Dokümantasyon',
        'forum'                           => 'Forum',
        'blog'                            => 'Blog',
        'support'                         => 'Destek',
        'donate'                          => 'Bağış Yap',
        'store'                           => 'Mağaza',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> C dili ile hazırlanmış <a href=':1:'>yüksek performans</a> ve daha düşük kaynak tüketimi sunan bir web framework'dür.",
        'the_fastest_php_framework'       => 'En hızlı<br />PHP Framework\'u',
        'try_online'                      => 'Çevrimiçi Dene',
        'see_screencasts'                 => 'Videoları Gör',
        'everything_you_need_upper'       => 'İhtiyacınız Olan Herşey',
        'full_mvc_applications'           => "Tüm <a href=':1:'>MVC</a> Uygulamaları",
        'single_module'                   => 'Tek Modül',
        'multi_module'                    => 'Çoklu Modül',
        'micro_applications'              => 'Mikro Uygulamalar',
        'orm'                             => 'ORM',
        'transactions'                    => 'Transactions',
        'behaviors'                       => 'Davranışlar',
        'relations'                       => 'İlişkiler',
        'phql'                            => 'PHQL',
        'events'                          => 'Olaylar',
        'validations'                     => 'Doğrulamalar',
        'hydration'                       => 'Hidrasyon',
        'logging'                         => 'Günlük',
        'profiling'                       => 'Profilleme',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'Mongo için ODM',
        'template_engine_volt'            => 'Şablon Motoru (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Etkinlik Yönetimi',
        'encryption'                      => 'Şifreleme',
        'http_request'                    => 'HTTP İsteği',
        'http_response'                   => 'Yanıt',
        'http_cookies'                    => 'Çerezler',
        'escaping'                        => 'Atlatma',
        'filtering'                       => 'Filtreleme',
        'forms_builder'                   => 'Form Oluşturucu',
        'forms_validation'                => 'Doğrulama',
        'flash_messages'                  => 'Flaş Mesajlar',
        'cache'                           => 'Önbellek',
        'pagination'                      => 'Sayfalandırma',
        'annotations'                     => 'Açıklamalar',
        'security'                        => 'Güvenlik',
        'translations'                    => 'Çeviriler',
        'assets_management'               => 'Ek Yönetimi',
        'universal_auto_loader'           => 'Evrensel Otomatik Yükleyici',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'Phalcon Forumu',
        'stack_overflow_upper'            => 'Stack Overflow',
        'github_upper'                    => 'GitHub',
        'email_us_upper'                  => 'Bize Yazın',
        'services_upper'                  => 'Servisler',
        'consulting_upper'                => 'Danışmanlık',
        'requirements_analysis'           => 'Gereksinim Analizi',
        'implementation'                  => 'Implementasyon',
        'ongoing_support'                 => 'Devam Eden Destek',
        'read_more'                       => 'Devamını Oku',
        'hosting_upper'                   => 'SUNUCU HİZMETİ',
        'phalcon_can_be_installed'        => 'Phalcon bu sistemler üzerine kurulabilir:',
        'main_upper'                      => 'BAĞLANTILAR',
        'consulting'                      => 'Danışmanlık',
        'hosting'                         => 'Hosting',
        'support_upper'                   => 'DESTEK',
        'forum_community'                 => 'Forum / Topluluk',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Sorun İzleyici',
        'get_involved_upper'              => 'BİZE KATILIN',
        'team'                            => 'Takım',
        'about'                           => 'Hakkında',
        'roadmap'                         => 'Yol Haritası',
        'donate_to_phalcon'               => 'Phalcon\'a bağış yap:',
        'or'                              => 'veya',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => 'Katkıda Bulunanlar',

        'download_phalcon'                => 'Phalcon\'u İndir',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLL Dosyaları',
        'download_developer_tools'        => 'Geliştirici Araçları',
        'download_ide_stubs'              => 'IDE stubs',
        'download_ubuntu'                 => 'To install Phalcon on Ubuntu you need to follow these steps:',
        'download_ubuntu_1'               => 'If you are missing apt-add-repository run the following command:',
        'download_note'                   => 'Phalcon is a C extension, so you need to download a binary for your platform or compile it from source code.',
        'download_compilation'            => 'Derleme',
        'download_compilation_1'          => 'Eklentiyi Linux üzerinde kaynak kodundan kolayca derleyip yükleyebilirsiniz.',
        'download_requirements'           => 'Gereksinimler',
        'download_requirements_1'         => 'Daha önce yüklenmiş bazı paketler gerekiyor:',
        'download_requirements_2'         => 'PHP 5.x Geliştirici Kaynakları',
        'download_requirements_3'         => 'GCC Derleyici',
        'download_compilation_11'         => '1. C kaynağından eklenti oluşturmak için bu adımları izleyin:',
        'download_compilation_12'         => '2. php.ini dosyasına uzantıyı ekleyin:',
        'download_compilation_13'         => '3. Son olarak, web sunucusunu yeniden başlatın',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "<a href=':1:'>FortRabbit</a> tarafından önerilen bir depoyu <a href=':2:'>burada</a> bulabilirsiniz.",
        'download_debian_2'               => 'Paket ismi php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "ArchLinux için PKGBUILD dosyasını <a href=':1:'>burada</a> bulabilirsiniz.",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "There is a package available <a href=':1:'>here</a> (thanks to <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'A port is available for FreeBSD. You only need these few commands to install it:',
        'download_dependencies'           => 'Bağımlılıklar',
        'download_dependencies_1'         => 'Phalcon diğer binary eklentilerle doğrudan ilişkili olmamasına rağmen, onlardan bazılarını fonksiyonellik sağlamak için kullanmıştır. Kullanılan eklentiler:',
        'download_dependencies_2'         => 'Yukarıda belirtilen eklentilerin, Phalcon kurulu bir sistemde tanımlı olması zorunlu değildir. Sadece ihtiyaç duyduklarınızı kurabilirsiniz. Örneğin, eğer MySQL veritabanı kullanıyorsanız, sadece PDO ve PDO/MySQL yükleyip, Oracle, SQlite, Postgresql ve Mongo\'yu ihmal edebilirsiniz.',
        'download_need_help'              => 'Yardıma mı ihtiyacınız var?',
        'download_need_help_1'            => "Çeşitli problemleriniz ve sorularınız için <a href=':1:'>destek sayfamıza</a> göz atın. Size yardımcı olmak için elimizden geleni yapacağız.",

        'download_windows_note'           => 'We highly recommend you use the latest version of PHP corresponding to our DLLs, so as to take advantage of the full feature set of Phalcon.',
        'download_windows_stable'         => 'Kararlı/Ana Sürümler',
        'download_windows_installation'   => 'Kurulum',
        'download_windows_installation_1' => "Windows tabanlı işletim sisteminizde phalcon kullanabilmek için DLL kütüphanesini indirin. Eklentiyi çalıştırmak için php.ini dosyanızı düzeneyin ve web sunucunuzu yeniden başlatın. <a href=':1:'>Detaylar</a>.",
        'download_windows_guides'         => 'İlgili Kılavuzlar',
        'download_windows_guides_xampp'   => 'XAMPP Üzerinde Kurulum',
        'download_windows_guides_wamp'    => 'WAMP Üzerinde Kurulum',
        'download_windows_alpha'          => 'Alfa/Beta Sürümleri',
        'download_source_code'            => "Kaynak Kodu: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "Kaynak Kodu (lütfen alakalı branşa geçiniz): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => 'Şu an hiç uygun alfa/beta sürümü yok.',
        'download_windows_older'          => 'Eksi Sürümler',

        'download_devtools_1'             => 'Bu araçlar, iskelet kodun oluşturulması için kullanılan yararlı scriptlerin bir araya getirilmesi ile oluşturulmuştur. Uygulamanın çekirdek bileşenleri basit bir komutla yaratılabilir ve size Phalcon ile rahatlıkla uygulama geliştirme imkânı sunar.',
        'download_devtools_docs'          => "Dokümantasyon: <a href=':1:'>Phalcon Geliştirici Araçları</a>",
        'download_devtools_composer'      => 'Composer Aracılığı İle Yükleme',
        'download_devtools_composer_1'    => 'Composer\'ı ortak bir konuma ya da proje dizinine kurun:',
        'download_devtools_composer_2'    => 'composer.json dosyasını aşağıda belirtildiği şekilde oluşturun:',
        'download_devtools_composer_3'    => 'Composer yükleyicisini çalıştırın:',
        'download_devtools_composer_4'    => 'Create a symbolic link to the phalcon.php script:',
        'download_devtools_download'      => '<a href=":1:">Github</a> üzerinden, geliştirici araçlarını da içeren çapraz platform paketini indirebilir ya da klonlayabilirsiniz.',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Vagrant Boxes',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a> is an excellent tool to create and configure lightweight, reproducible, and portable development environments.",
        'download_vagrant_2'              => "Use any of the following boxes to test or develop with Phalcon on a pre-configured environment.",
        'download_box_1'                  => "Box #1",
        'download_box_2'                  => "Box #2",
        'download_box_user_pass'          => "MySQL User: :1: Password: :2:",
        'download_box_doc_root'           => "Document Root: :1:",
        'download_examples'               => "Pre-Installed examples",
        'download_examples_1'             => "The following examples are pre-installed on each vagrant box:",

        'consulting_header'               => "We have partnered with <a href=':1:'>LEZGRO</a>, a company that specializes in web and mobile application development and is very adept in delivering Phalcon powered applications to their clientele.",
        'consulting_lezgro_1'             => "<a href=':1:'>LEZGRO</a> congratulates you with the your choice of making Phalcon central in your technology stack!",
        'consulting_lezgro_2'             => "Since our company first saw the light of the day in 2003, we have tried various technologies and approaches in software development.",
        'consulting_lezgro_3'             => "Product managers, CTOs, and non-technical founders involve <a href=':1:'>LEZGRO</a> to build products that stand out, quickly and with a high quality.",
        'consulting_lezgro_4'             => "Now that we have acquired positive experience with Phalcon, we are open to advise you on making the decision to develop on Phalcon, and help you bring your Phalcon-based product to market.",
        'consulting_lezgro_5'             => "Contact LEZGRO through their <a href=':1:'>website</a>, where you can also see samples and testimonials of their work.",
        
        'requirements_analysis_1'         => 'One of the biggest problems that developers face is the fact that a lot of projects do not have adequately defined requirements. Therefore, more often than not what the client wants is totally different from what the developer understands and subsequently delivers.',
        'requirements_analysis_2'         => 'We can offer requirements analysis services, discussing with the clients and translating their vision to exact specifications for developers.',
        'implementation_1'                => 'If you wish to hire us to develop your application, we would be more than happy to do so. Using the latest technologies, we can offer a robust solution for your task or project, complete with tests and documentation.',
        'ongoing_support_1'               => 'For customers that are interested in an ongoing support contract we can offer support for their projects on an ongoing basis. Customers can purchase hours of support (minimum 2 hours) at 50 USD per hour.',
        'ongoing_support_2'               => 'Support hours do not expire and can be used whenever needed. For customers that wish to use an ongoing support scheme, we offer flexible plans that would suit their needs better.',
        'sponsors'                        => 'Sponsorlar',
        'sponsors_1'                      => 'For those that wish to sponsor our work and further the development of Phalcon, we offer various sponsorship options that will fit any budget.',
        'sponsors_2'                      => 'Additionally, customers might want certain features implemented that would normally take a lot longer to do so due to their popularity or complexity. We can certainly accommodate such requests at our normal rates.',
        'contact'                         => 'İletişim',
        'contact_1'                       => "Feel free to <a href=':1:'>contact us</a> to discuss your requirements and allow us to offer a solution that would best fit your needs and your budget. No project is too big or too small.",

        'phalcon_team'                    => 'Phalcon Ekibi',
        'team_andres_1'                   => 'Andres is no stranger to open source projects. In the last nine years, he has designed and released frameworks for PHP and has been involved in web development - his main passion.',
        'team_andres_2'                   => "A TR35 winner, Andres' main drive is to always choose and implement or use the right tool for the job, mostly focused on performance. Therefore in 2011 a new idea was in the works; to create a new kind of framework for PHP developers, one that focuses on usability, features and mostly performance.",
        'team_andres_3'                   => 'Through this new innovative approach Phalcon was born. A PHP framework written in C that can offer a wealth of features to developers while maximizing performance and keeping resource utilization low.',
        'team_andres_4'                   => 'Andres , Phalcon\'un ana değiştiricilerinden ve ilham vericilerinden biridir.',
        'team_nikos_1'                    => 'Nikos 20 yıldan daha uzun süredir IT endüstrisinde. Kişisel projelerine ve müşterilerinin projelerine kullanmaya başlayarak 2000 yılında PHP dünyasına katılmıştı.',
        'team_nikos_2'                    => 'He loves discovering new technologies and ways to integrate them with existing applications and thus reap the benefits they offer.',
        'team_nikos_3'                    => 'He is an avid supporter of Test Driven Development (TDD) and always tries to get full coverage in his code.',
        'team_nikos_4'                    => "Nikos' continuing interest in new and innovative technologies breaking out of the norm introduced him to Phalcon. He joined the core team and his tasks mainly involve coordination of NFRs and bug fixes, help with tests, documentation and the incubator. Nikos is also responsible for maintaining the Windows DLLs for the project and offers support whenever possible.",
        'team_nikolay_1'                  => 'Nikolay has been developing web applications for over 10 years. He has been involved in high performance as well as complex websites and designs.',
        'team_nikolay_2'                  => 'Nikolay has been working with Open Source projects for a long time, utilizing them whenever requirements allow. He thus started using his personal time to give back to the community, by forking projects, offering architectural changes and suggestions, as well as performance ones. He has been instrumental in improving Open Source CMS projects receiving positive feedback from the community.',
        'team_nikolay_3'                  => 'His continuous involvement with open source projects has helped him advance his technical knowledge while abiding by the give back to the community mentality.',
        'team_nikolay_4'                  => 'Nikolay is an avid supporter of maximizing performance in web applications. After his introduction to Phalcon, he decided to pursue and use the project and become an Evangelist for it. He is leading the effort toward the Russian community and offers resources for Russian speaking developers.',
        'team_nikolay_5'                  => "His contributions include: A mirror of the main website in Russian (<a href=':1:'>http://www.phalconphp.ru</a>), a mirror of the documentation repository in Russian (<a href=':2:'>http://docs.phalconphp.ru</a>), ongoing changes and corrections to the documentation in English, a group in the social network Vkontakte (<a href=':3:'>http://vk.com/phalconphp</a>).",

        'get_involved'                    => 'Bize Katılın',
        'about_description_1'             => "Amazing projects need amazing hands. We might not know you just yet, but we think you'd be a great fit for building a better web. Together, we're ready to change the world! Here at Phalcon, we’re building a new generation framework for PHP; we want to give you an amazing performance while helping you develop in an easy and fun way.",
        'about_description_2'             => "We hope that you enjoy Phalcon as much as we do. We always welcome your collaboration and help! <strong>You don't have to be a C developer to help Phalcon!</strong> There are many other areas that you can contribute:",
        'about_translations_1'            => "Dil engelini aşarak, mümkün olduğu kadar çok geliştiriciye ulaşmaya çalışıyoruz. Site için tercüme edilmesi gereken kelime ve sözcüklerin tercüme edilmesi için <a href=':1:'>:2:</a> kullanıyoruz. Tercüme projesini <a href=':3:'>burada</a> bulabilir ve güncel İlerleme durumunu aşağıda görebilirsiniz.",
        'documentation_upper'             => 'Dokümantasyon',
        'about_documentation_1'           => "The repository of this website is available on <a href=':1:'>github</a>. We are using <a href=':2:'>readthedocs</a> to manage our documentation.<br /><br />We always appreciate corrections, additions and enhancements in our documentation, so all you have to do is clone the repository and issue a pull request!<br /><br />If you can help non English speaking developers by translating some of the content to another language, that would be great!",
        'screencasts'                     => 'Videolar',
        'about_screencasts_1'             => "We all love screencasts. If you have some extra time and want to support the community with some nice videos teaching any of the framework's features, it's very welcome. Check out our <a href=':1:'>Vimeo Channel</a> as a guide.",
        'tests'                           => 'Testler',
        'about_tests_1'                   => "Hataları olmayan hiçbir yazılım yoktur. Eğer bir hata bulursanız, lütfen bize bildirmek için tereddüt etmeyin. <a href=':1:'>8000</a>'den fazla test içeren bir test paketine sahibiz. Ancak test birimi hiçbir zaman yeterli değil. Test paketine yeni testler ekleyip geliştirerek veya mevcut olanlarından birini geliştirerek bize yardım edin. Her eklenen test framework'ü daha kararlı hale getirir.",
        'sample_applications'             => 'Örnek Uygulamalar',
        'about_sample_apps_1'             => 'Big examples help others to better understand how big things can be created with Phalcon. Feel free to share repositories to sample applications helping others with their work and allow others to give you feedback about your work too!',
        'evangelism'                      => 'Duyurma & Yayma',
        'about_evangelism_1'              => "There are a lot of people who still don’t know that Phalcon exists or that it really works. We are certain that many developers will benefit from hearing what Phalcon is all about and how it can help them. If you know of any PHP events/meetings and you wish to give a talk about the project, you have our full support. Who wouldn't want to know about the tool that is revolutionizing PHP development?",
        'share_your_experiences'          => 'Deneyimlerinizi paylaşın',
        'about_share_experiences_1'       => "Don’t be shy, feel free to share the ways through which Phalcon was useful to you with the community. If Phalcon is a success case for you, let us share that with the community. Also, discuss what components needed extra work, what you could do easier, what benefits you got by using Phalcon. Although not everything can be implemented immediately, your input on new feature requests can greatly help us shape the future of the project. Your feedback helps us all.",
        'about_blog_1'                    => "If you like writing, remember that <a href=':1:'>our blog</a> is open to post tutorials created by you. If you have a blog of your own and have written something about Phalcon, we can also publish in our social network pages so as to achieve maximum visibility. If your blog post is in a language other than English, we want to share it and potentially translate it if possible. If you know about blogs related to PHP that are interested in presenting the project to its audience please let us know.",
        'donations_sponsoring'            => 'Bağış / Sponsor',
        'about_sponsoring_1'              => "We’re a tiny but effective core team of developers working our tails off. We try to spend as much time as possible on the project. All our passion for this project makes us want to be better every day. Phalcon is open-sourced software and volunteer efforts are needed for its constant evolution. You can help us keep the development active by donating to the project or sponsoring the development. More time and resources dedicated to the project means more activity, more improvement, better support, more amazing features, etc.",
        'social_networks'                 => 'Sosyal Ağlar',
        'about_social_networks_1'         => "Phalcon is evolving on a daily basis, through our desire to make it better. Social networks are part of our lives now, and we all interact with others through them. Sharing your Phalcon experience with your social circles will greatly increase the visibility of the project. More and more people will engage in our community, thus making it more powerful, even more feature rich and popular. Like, '+1', share posts that we constantly post on every social network, engage in discussions regarding those posts. People who discover Phalcon through your interactions will thank you!",
        'about_social_networks_2'         => "En popüler sosyal ağlarda bizi bulabilirsiniz. Bizi takip ederek proje bilinirliğinin artmasında yardımcı olabilirsiniz:",
        'follow_on_twitter'               => 'Twitter\'da Takip Et',
        'facebook_page'                   => 'Facebook Sayfası',
        'google_plus_page'                => 'Google+ Sayfası',
        'official_blog'                   => 'Resmi Blog',
        'star_on_github'                  => 'GitHub\'da proje oluştur',
        'thank_you'                       => 'Teşekkürler!',
        'about_thank_you_1'               => 'We would like to thank all of our contributors and members of the community for pushing us to make Phalcon the best framework of its kind. Your kind words and engagement is what drives us to do better. We hope to meet and exceed the trust you put in Phalcon.',
        'flying_with_phalcon'             => 'Phalcon ile uçuşa geçtiğiniz için teşekkürler! &lt;3',

        'hosting_description'             => 'SSH root ( veya sudo) erişimli sunucu barındırma hizmeti sunan hizmet sağlayıcılarında bulunan herhangi bir makineye Phalcon kurulabilir. Aşağıdakiler bu hizmeti veren saygın şirketlerin listesi:',
        'hosting_fortrabbit_title'        => 'Fortrabbit',
        'hosting_fortrabbit_1'            => 'Fortrabbit offers many hosting plans (there is one for developers and is free - with some limitations) that would satisfy the needs of most of the developers that wish to either try Phalcon or deploy their applications using it.',
        'hosting_fortrabbit_2'            => "They offer a variety of <a href=':1:'>extensions</a> that would satisfy even the most demanding project.",
        'hosting_fortrabbit_3'            => 'Phalcon\'un stabil versiyonları önceden yüklendi, yönetici panelinden enkinleştirebilirsiniz.',
        'hosting_webfaction_title'        => 'WebFaction',
        'hosting_webfaction_1'            => 'WebFaction Hosting for developers. Full shell access to fast servers with all your favorite tools pre-installed and maintained for the user.',
        'hosting_webfaction_2'            => "WebFaction sunucuları üzerinde Phalcon'u kurmak için <a href=':1:'>burada</a> özetlenen talimatları izleyin.",
        'hosting_amazon_ec2_title'        => 'Amazon EC2',
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud delivers scalable, pay-as-you-go compute capacity in the cloud.',
        'hosting_amazon_ec2_2'            => "Select a pre-configured, templated Amazon Machine Image (AMI) to get up and running immediately. Or create an AMI containing your applications, libraries, data, and associated configuration settings. <a href=':1:'>See more</a>",
        'hosting_linode_title'            => "Linode",
        'hosting_linode_1'                => "Deploy and Manage Linux Virtual Servers in the Linode Cloud. Get a server running in seconds with your choice of Linux distro, resources, and node location. <a href=':1:'>See more</a>",
        'hosting_digital_ocean_title'     => 'Digital Ocean',
        'hosting_digital_ocean_1'         => "Blazing Fast Cloud Technology. Built for developers. Deploy an SSD cloud server in 55 seconds. <a href=':1:'>See more</a>",
        'hosting_digital_ocean_2'         => "<p>Follow this <a href=':1:'>tutorial</a> to get started</p>",
        'hosting_rackspace_title'         => "Rackspace",
        'hosting_rackspace_1'             => "Cloud Servers are virtual machines running Linux or Windows&reg; Server in the Rackspace Cloud. You can scale resources like CPU, memory, and storage up or down, depending on your needs. Best of all, you can pay as you go. <a href=':1:'>See more</a>",
        'hosting_install_instructions'    => 'Phalconu standart yükleme talimatlarını kullanarak yükleyin.',
        'hosting_azure_title'             => "Windows Azure",
        'hosting_azure_1'                 => "<a href=':1:'>Windows Azure bulut servisi</a>, web uygulamalarınız için yüksek ölçekli ve yönetilebilir Windows hosting sağlar. Örnek maliyetlerinizi azaltmak için Phalcon kullanın.",
        'hosting_azure_2'                 => "Phalcon'u yüklemek için <a href=':1:'>SitePoint makalesindeki</a> işlemleri adım adım takip edin.",
        'hosting_aspnix_1'                => 'ASPnix provides superior Windows web hosting services. Our customers have rated our service as outstanding. We offer economical plans for shared Windows web hosting, Virtual private servers and dedicated servers!  <a href=":1:">See more</a>',
        'hosting_aspnix_2'                => '<p>Phalcon is supported on all Windows shared web hosting packages and plans, no configuration or installation required! They offer a variety of PHP versions from 5.2 – 5.6 as well as many <a href=":1:" target="_blank">additional extensions</a>!</p>',
        'hosting_layershift_title'        => 'Layershift',
        'hosting_layershift_1'            => "You bring the code, we'll sort the servers. Next generation, auto-sizing PaaS for PHP",
        'hosting_layershift_2'            => "<p>Follow this <a href=':1'>tutorial</a> to get started</p>",

        'testimonials'                    => 'Görüşler',
        'testimonials_description'        => "Below is a collection of testimonials and success stories, from you, the developers and users of Phalcon PHP. We always welcome emails with success stories and will be posting those in our blog. If you wish to send us your success story or get in touch with us, feel free to mail us at <a href='mailto::1:'>:2:</a>.",
        'testimonials_1'                  => "Greetings, Phalcon team! I have a project, built on Phalcon framework. It's a Guitarama (<a href=':1:'>:2:</a>) - guitars tabs and chords catalog. The site is aimed at the Russian audience, and uses the Russian language, but I hope, there will be no problem to understand most of pages. The site was re-launched on a new platform in the beginning of January, 2013 and has since shown steady growth. Current daily visits: ~1500 unique visitors, ~5000 page views. The site is running on an old physical server 1хP4-3Ghz, 4GB RAM. Once again, thank you for a great framework and all what you are doing :)  Michael.",
        'testimonials_2'                  => "Hello, Phalcon team. I would like to share with you our success story of using Phalcon in <a href=':1:'>:2:</a> and <a href=':3:'>:4:</a> projects, the most visited and highloaded sites in Kazakhstan, ranked in TOP-10 classified sites in the CIS. Both sites work on single RESTful-like API written on Phalcon\Mvc\Micro. On peak loads API processes something like 400 req/sec and this is not a limit. Moving to Phalcon allowed us to reduce response generation time and the consumption of CPU and RAM, as well as to reduce the time of development process. We will continue using Phalcon in our new projects. Thank you for the great work you are doing! Best regards, Nikita Vershinin, Lead Developer, Kolesa.kz and krisha.kz",
        'testimonials_3'                  => "Phalcon Team, The framework you guys have created is amazing. I've never used a framework that has combined speed, efficiency, brevity, and naturality all in one package. I intend on championing and contributing back to the project in any way that I can. I embarked recently on an ~800 hour project and am happy to say that we are using Phalcon Framework. Bravo. Brian Seymour",
        'testimonials_4'                  => "Hi guys, I just ran across Phalcon and it's just awesome! I've merely wanted to say to you how awesome you are! So, thanks for this framework and keep up the good work! Ivan Penchev",
        'testimonials_5'                  => "Hi Guys, i wrote simple url-shortener service with phalcon. That was amazing! really. <a href=':1:'>:2:</a>. Demo is here <a href=':3:'>:4:</a> :) Murat Küçükosman ",
        'testimonials_6'                  => "Hello Phalcon Team, I created a small project designed for Polish users using your framework. I have to admit that the performance is amazing, congratulations good job. Service to validate the content of the web pages in Polish language <a href=':1:'></a>:2:</a>",
        'testimonials_7'                  => "Hi guys! Just wanted to share with you the latest release of our old project - <a href=':1:'>:2:</a>. Switching to phalcon allowed us to halve the server load compared to the previous framework, which is great!",

        'support_note'                    => "Karşılaştığınız çoğu hatanın ortaya çıkmasının en genel sebebi son sürümün kullanılmamasıdır. Lütfen :1: adresini ziyaret edin ve en son uygun sürümü indirin (ya da derleyin) ve karşılaştığınız meselenin gerçekten bir hata olup olmadığından emin olun.",
        'support_download_page'           => "indirme sayfası",
        'support_documentation_1'         => "Lütfen herşeyden önce :1: bölümünü kullanın. Ayrıca dokümanlarımızda aradığınızı bulabilmek için arama özelliğini de kullanabilirsiniz. Eğer sorunuza hâla yanıt bulamadıysanız, aşağıda birkaç seçenek daha bulunmaktadır.",
        'support_phalcon_forum'           => "Phalcon Forumu",
        'support_forum_1'                 => "Sorularınızı <a href=':1:'>Tartışma Forumumuzda</a> sorabilirsiniz.",
        'support_irc'                     => "IRC Kanalı",
        'support_irc_1'                   => "Bizi Freenode üzerinde :1:. kanalda bulabilirsiniz.",
        'support_stack_overflow_1'        => "Eğer Stack Overflow'a yabancı değilseniz veya Stack Overflow'u kullanmayı tercih ediyorsanız, arama yapmak ya da sorgularınızı etiketlemek için <a href=':1:'>phalcon</a> etiketini kullanabilirsiniz.",
        'support_please_note'             => "Lütfen dikkat:",
        'support_please_note_1'           => "Stack Overflow, kendini Phalcon' u desteklemeye adamamıştır.",
        'support_please_note_2'           => "Lütfen bu bölümden hata bildiriminde bulunmayın. Bunun için GitHub üzerindeki <a href=':1:'>olay takip sistemini</a> kullanabilirsiniz.",
        'support_please_note_3'           => "Lütfen bu bölümden yeni özellik talebinde bulunmayın. Bunun için GitHub üzerindeki <a href=':1:'>olay takip sistemini</a> kullanabilirsiniz.",
        'support_please_note_4'           => "Sorunuza 'phalcon' etiketini eklediğinizden emin olun.",
        'support_please_note_5'           => "Soru içerisinde 'Phalcon' dan bahsettiğinizden emin olun.",
        'support_reporting_a_bug'         => "Hata Bildir",
        'support_reporting_a_bug_1'       => "Yukarıdaki seçeneklerin tamamını deneyip çözüme ulaşamadıysanız lütfen Github'da bulunan <a href=':1:'>sorun takip edici</a>'yi kullanarak hataları bildirin.",


    );

    // return $messages;
