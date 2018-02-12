<?php
   /**
    * The template for displaying pages
    */

   get_header(); ?>

<?php
if( have_rows('page_content') ) {

   while ( have_rows('page_content') ) { the_row();

      if( get_row_layout() == 'slider' ) {

         get_template_part('template-parts/slider');

      }

   }

}
?>

<div class="tabs__wrap">
   <div class="container">
      <div class="tabs__btns"><a class="tabs__btn tabs__btn_active" href="#"><span class="flaticon-interface"></span>Подать заявку</a><a class="tabs__btn" href="#"><span class="flaticon-palm-trees"></span>Выбрать тур</a></div>
   </div>
   <ul class="tabs">
      <li class="tab tab_active">
         <div class="container">
            <form class="steps">
               <div class="step">
                  <div class="step__inner">
                     <h2 class="title"><span>ШАГ 01</span></h2>
                     <fieldset>
                        <p class="steps__desc">Где хотите отдохнуть?</p>
                        <div class="steps__options">
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="dominikana"><label for="dominikana">Доминикана</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="turkey"><label for="turkey">Турция</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="vietnam"><label for="vietnam">Вьетная</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="tunis"><label for="tunis">Тунис</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="maldivy"><label for="maldivy">Мальдивы</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="cuba"><label for="cuba">Куба</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="thai"><label for="thai">Тайланд</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="cyprus"><label for="cyprus">Кипр</label></div>
                           <div class="steps__option"><input class="steps__option-radio" type="radio" name="where" id="mexica"><label for="mexica">Мексика</label></div>
                           <div class="steps__option steps__option-radio_other"><input class="steps__option-radio" type="radio" name="where" id="other"><label for="other">Другое</label></div>
                        </div>
                     </fieldset>
                  </div>
               </div>
               <div class="step">
                  <div class="step__inner step_2">
                     <h2 class="title"> <span>ШАГ 02</span></h2>
                     <fieldset>
                        <p class="steps__desc">Когда планируете отдых</p>
                        <label for="date">Дата вылета</label>
                        <div class="step__row">
                           <input type="date" id="date" name="date" placeholder="01.01.2018"><span class="step__span step__span_mr">+/- 3 дня</span><span class="step__span">На</span>
                           <select class="step__select" name="country">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                              <option>13</option>
                              <option>14</option>
                           </select>
                           <span class="step__span">Ночей</span>
                        </div>
                     </fieldset>
                  </div>
               </div>
               <div class="step">
                  <div class="step__inner">
                     <h2 class="title"> <span>ШАГ 03</span></h2>
                     <fieldset>
                        <p class="steps__desc">Сколько людей</p>
                        <div class="steps__persons">
                           <div class="steps__humans"><input class="steps__human" type="radio" name="humans" id="human1"><label for="human1"></label><input class="steps__human" type="radio" name="humans" id="human2" checked><label for="human2"></label><input class="steps__human" type="radio" name="humans" id="human3"><label for="human3"></label><input class="steps__human" type="radio" name="humans" id="human4"><label for="human4"></label></div>
                           <div class="steps__childs"><input class="steps__human" type="radio" name="childs" id="child1"><label for="child1"></label><input class="steps__human" type="radio" name="childs" id="child2" checked><label for="child2"></label><input class="steps__human" type="radio" name="childs" id="child3"><label for="child3"></label><input class="steps__human" type="radio" name="childs" id="child4"><label for="child4"></label></div>
                        </div>
                     </fieldset>
                  </div>
               </div>
               <div class="step">
                  <div class="step__inner step_4">
                     <h2 class="title"> <span>ШАГ 04</span></h2>
                     <fieldset>
                        <p class="steps__desc">Ориентировочный бюджет</p>
                        <input type="range" min="50000" max="3000000" value="200000" name="curr" id="curr">
                        <div class="range__current">200000</div>
                        <div class="range__left"> 50 000</div>
                        <div class="range__right">3 000 000</div>
                     </fieldset>
                  </div>
               </div>
               <div class="step">
                  <div class="step__inner step_5">
                     <h2 class="title"> <span>ШАГ 05</span></h2>
                     <fieldset>
                        <p class="steps__desc">Откуда вылетаете</p>
                        <select class="step__select step__select_from" name="from">
                           <option>Москва</option>
                           <option>Санкт-Петербург</option>
                        </select>
                        <input class="steps__option-checkbox" type="checkbox" name="dontknow" id="dontknow"><label for="dontknow">Пока не знаю</label>
                     </fieldset>
                  </div>
               </div>
               <div class="step">
                  <div class="step__inner">
                     <h2 class="title"> <span>ШАГ 06</span></h2>
                     <fieldset>
                        <div class="step__textfields"><textarea class="steps__textarea" placeholder="Ваш комментарий" name="comment" id="comment"></textarea><input type="tel" placeholder="Ваш телефон" name="tel" id="tel"><input type="submit" value="Подать заявку"></div>
                     </fieldset>
                  </div>
               </div>
            </form>
         </div>
      </li>
      <li class="tab">
         <div class="container">TAB 2 CONTENT HERE</div>
      </li>
   </ul>
</div>
<div id="shares" class="shares" style="background-image: url('<?php echo get_template_directory_uri() ;?>/images/bg.jpg');">
   <div class="container">
      <h2 class="title"><span>Акции</span></h2>
      <div class="shares__filters">
         <select class="shares__select" name="country">
            <option>Россия</option>
            <option>Украина</option>
            <option>Белоруссия</option>
         </select>
         <div class="shares__filter"><input type="radio" name="filter" id="estab" checked><label for="estab">Заведения</label></div>
         <div class="shares__filter"><input type="radio" name="filter" id="rest"><label for="rest">Рестораны</label></div>
         <div class="shares__filter"><input type="radio" name="filter" id="services"><label for="services">Услуги</label></div>
         <div class="shares__filter"><input type="radio" name="filter" id="kitchen"><label for="kitchen">Кухня</label></div>
         <div class="shares__filter"><input type="radio" name="filter" id="shop"><label for="shop">Магазины</label></div>
         <div class="shares__filter"><input type="radio" name="filter" id="excursions"><label for="excursions">Экскурсии</label></div>
         <div class="shares__filter"><input type="radio" name="filter" id="health"><label for="health">Здоровье</label></div>
      </div>
   </div>
   <div class="container">
      <ul class="shares__list">
         <li class="card" data-country="Россия" data-type="estab, kitchen, shop">
            <a class="card__link">
               <span class="card__price">499$</span>
               <div class="card__image"><img src="<?php echo get_template_directory_uri() ;?>/images/1.jpg"></div>
               <div class="card__desc">
                  <div class="catd__desc-text">Стоимость символической свадебной церемонии "Рай для влюбленных"</div>
               </div>
               <span class="card__btn">Посмотреть</span>
            </a>
         </li>
         <li class="card" data-country="Россия, Украина, Белоруссия" data-type="estab, rest, services, kitchen, shop, excursions, health">
            <a class="card__link">
               <span class="card__price">499$</span>
               <div class="card__image">
                  <img src="<?php echo get_template_directory_uri() ;?>/images/2.jpg">
               </div>
               <div class="card__desc">
                  <div class="catd__desc-text">Стоимость символической свадебной церемонии "Рай для влюбленных"</div>
               </div>
               <span class="card__btn">Посмотреть</span>
            </a>
         </li>
         <li class="card" data-country="Россия, Украина" data-type="estab, kitchen">
            <a class="card__link">
               <span class="card__price">499$</span>
               <div class="card__image">
                  <img src="<?php echo get_template_directory_uri() ;?>/images/3.jpg">
               </div>
               <div class="card__desc">
                  <div class="catd__desc-text">Стоимость символической свадебной церемонии "Рай для влюбленных"</div>
               </div>
               <span class="card__btn">Посмотреть</span>
            </a>
         </li>
         <li class="card" data-country="Россия" data-type="estab, kitchen">
            <a class="card__link">
               <span class="card__price">499$</span>
               <div class="card__image">
                  <img src="<?php echo get_template_directory_uri() ;?>/images/4.jpg">
               </div>
               <div class="card__desc">
                  <div class="catd__desc-text">Стоимость символической свадебной церемонии "Рай для влюбленных"</div>
               </div>
               <span class="card__btn">Посмотреть</span>
            </a>
         </li>
         <li class="card" data-country="Россия" data-type="estab, kitchen">
            <a class="card__link">
               <span class="card__price">499$</span>
               <div class="card__image"><img src="<?php echo get_template_directory_uri() ;?>/images/1.jpg"></div>
               <div class="card__desc">
                  <div class="catd__desc-text">ЕЩЕ</div>
               </div>
               <span class="card__btn">Посмотреть</span>
            </a>
         </li>
         <li class="card" data-country="Россия" data-type="estab, kitchen">
            <a class="card__link">
               <span class="card__price">499$</span>
               <div class="card__image"><img src="<?php echo get_template_directory_uri() ;?>/images/1.jpg"></div>
               <div class="card__desc">
                  <div class="catd__desc-text">ЕЩЕ</div>
               </div>
               <span class="card__btn">Посмотреть</span>
            </a>
         </li>
      </ul>
   </div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>