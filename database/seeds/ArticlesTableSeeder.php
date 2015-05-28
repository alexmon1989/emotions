<?php

use Illuminate\Database\Seeder;
use Emotions\Article;

class ArticlesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->truncate();



        Article::create(array(
                'title' => 'Сертификаты на впечатления',
                'full_text' => '<p>Внимание всех ценителей новых эмоций! Для тех, кто уже знает, какие эмоции самые желанные, и какие впечатления ЭМПРАНА подходят больше всего – на сцене развлекательных услуг для Вас появились СЕРТИФИКАТЫ от компании ЭМПРАНА! Кто бы мог подумать, что пластиковая карта в Ваших руках превратится в волшебный пропуск в мир долгожданных развлечений! Если уже известно, какое впечатление подойдет больше всего – не нужно тянуть, просто воспользуйтесь Сертификатом ЭМПРАНА!</p>'.
                                '<p>В отличие от подарочной коробки - Вы ведь ее обязательно подарите, Сертификат содержит в себе впечатление именно для Вас! Легко активируемый и компактный, Сертификат ЭМПРАНА – станет удивительным билетом в мир Ваших желанных эмоций. Порадуйте себя, подарив себе сертификат ЭМПРАНА!</p>',
                'type' => 'main_article'
            )
        );

        Article::create(array(
                'full_text' => '<p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>'.
                                '<p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>',
                'type' => 'footer_about'
            )
        );

        Article::create(array(
                'full_text' => '<address class="md-margin-bottom-40">
                        25, Lorem Lis Street, Orange <br>
                        California, US <br>
                        Phone: 800 123 3456 <br>
                        Fax: 800 123 3456 <br>
                        Email: <a class="" href="mailto:info@anybiz.com">info@anybiz.com</a>
                    </address>',
                'type' => 'footer_contacts'
            )
        );

        Article::create(array(
                'title' => 'О компании',
                'full_text' => '<p>Praesent aliquet vitae massa nec porta. Nulla facilisi. Pellentesque vitae ipsum purus. Nullam aliquam imperdiet quam id maximus. Phasellus porttitor nulla nec mattis lobortis. Nullam nec metus congue, interdum leo et, pretium diam. Aliquam porta feugiat tincidunt. Praesent pharetra massa et turpis lacinia volutpat. Aliquam bibendum orci id justo ornare fringilla. In at eros id nisi pulvinar placerat. Phasellus pellentesque massa vitae justo volutpat, et fermentum nisi gravida. </p>
                <p>Praesent aliquet vitae massa nec porta. Nulla facilisi. Pellentesque vitae ipsum purus. Nullam aliquam imperdiet quam id maximus. Phasellus porttitor nulla nec mattis lobortis. Nullam nec metus congue, interdum leo et, pretium diam.</p>',
                'type' => 'about_article'
            )
        );

        Article::create(array(
                'title' => 'Контакты',
                'full_text' => '<p>Praesent aliquet vitae massa nec porta. Nulla facilisi. Pellentesque vitae ipsum purus. Nullam aliquam imperdiet quam id maximus. Phasellus porttitor nulla nec mattis lobortis. Nullam nec metus congue, interdum leo et, pretium diam. Aliquam porta feugiat tincidunt. Praesent pharetra massa et turpis lacinia volutpat. Aliquam bibendum orci id justo ornare fringilla. In at eros id nisi pulvinar placerat. Phasellus pellentesque massa vitae justo volutpat, et fermentum nisi gravida. </p>
                <p>Praesent aliquet vitae massa nec porta. Nulla facilisi. Pellentesque vitae ipsum purus. Nullam aliquam imperdiet quam id maximus. Phasellus porttitor nulla nec mattis lobortis. Nullam nec metus congue, interdum leo et, pretium diam.</p>',
                'type' => 'contacts_article'
            )
        );

        Article::create(array(
                'title' => 'Доставка и опалата',
                'full_text' => '<p>Praesent aliquet vitae massa nec porta. Nulla facilisi. Pellentesque vitae ipsum purus. Nullam aliquam imperdiet quam id maximus. Phasellus porttitor nulla nec mattis lobortis. Nullam nec metus congue, interdum leo et, pretium diam. Aliquam porta feugiat tincidunt. Praesent pharetra massa et turpis lacinia volutpat. Aliquam bibendum orci id justo ornare fringilla. In at eros id nisi pulvinar placerat. Phasellus pellentesque massa vitae justo volutpat, et fermentum nisi gravida. </p>
                <p>Praesent aliquet vitae massa nec porta. Nulla facilisi. Pellentesque vitae ipsum purus. Nullam aliquam imperdiet quam id maximus. Phasellus porttitor nulla nec mattis lobortis. Nullam nec metus congue, interdum leo et, pretium diam.</p>',
                'type' => 'payments_article'
            )
        );

        Article::create(array(
                'full_text' => '<ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
                </ul>',
                'type' => 'contacts_widget'
            )
        );

        Article::create(array(
                'full_text' => '<ul class="list-unstyled margin-bottom-30">
                    <li><strong>пн-вс:</strong> круглосуточно</li>
                </ul>',
                'type' => 'business_hours_widget'
            )
        );
    }

}