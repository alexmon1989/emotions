<?php

use Illuminate\Database\Seeder;
use Emotions\Article;

class ArticlesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->truncate();

        Article::create(array(
                'title' => 'Подарочные сертификаты',
                'full_text' => '<p>Подарочные сертификаты – это универсальный и удобный подарок и родным на праздники и дни рождения, и партнеру по бизнесу или коллеге, и своей любимой или любимому. Ведь это гораздо лучше и оригинальнее, чем дарить деньги.</p>'.
                               '<p>С помощью подарочного сертификата оригинально поздравить друзей и знакомых с определенными событиями, и совсем не нужно долго раздумывать о том, какой именно подарок нужен человеку.</p>'.
                               '<p>Оригинальные нестандартные подарки на любой вкус.</p>'.
                               '<p>Тогда когда идеи закончились, а подарок покупать все равно надо – вам на выручку придет онлайн-магазин оригинальных подарков
Если праздник у особенного человека, а вы уже подарили все, вплоть до звезд… Если от вашего подарка зависит ваше будущее, ну или хотя бы - какая-то его часть…
Желание получить необычный презент живет в каждом. И как неинтересно получать то, что у тебя уже есть или разворачивать подарок, который тебе не нужен…
Дорогие эксклюзивные подарки нужны не всегда. Но когда возникает необходимость их дарить, многие пребывают в растерянности.
Особенные люди достойны самого лучшего. Именно для них в компании Presentstar есть дорогие подарки, дарить которые не стыдно даже очень влиятельным персонам.
Каждый раз, когда приближается праздник, кто-то ждет подарки, а кто-то их покупает. И, к сожалению. Не всегда подарок оказывается интересным, не банальным и неожиданным.
Считается, что красота дается человеку от природы. С этим спорить сложно, но можно – ведь красоту можно еще и подарить!</p>',
                'type' => 'main_article'
            )
        );

        Article::create(array(
                'full_text' => '<p>Подарочные сертификаты – это универсальный и удобный подарок и родным на праздники и дни рождения, и партнеру по бизнесу или коллеге, и своей любимой или любимому. Ведь это гораздо лучше и оригинальнее, чем дарить деньги.</p>',
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