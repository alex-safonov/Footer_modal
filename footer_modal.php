<style type="text/css">
    .poll-modal.modal.fade .modal-dialog {margin-top:10%}
    .poll-modal .modal-content h3 {margin-bottom: 50px}
    /*.poll-modal .btn {margin: 10px}*/
    .poll-modal .btn_not {background-color: #d3d3d3}
    p.footer_modal_award {
        margin-bottom: 32px; 
        margin-top: 10px; 
        font-size: 16px;
		line-height: 24px;
		text-align: center;
		letter-spacing: 0.25px;
		color: #58646A;
	}
	p.footer_modal_award_info {
		margin-bottom: 32px; 
		font-size: 14px;
		line-height: 20px;
		text-align: center;
		letter-spacing: 0.15px;
		color: #7B878F;
	}
</style>

<script>
    $(document).ready(function () {
        $('.poll-modal').modal()
    });
</script>

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_ACTIVE_MONTH.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br> Спасибо, что несмотря на рабочие и личные дела ты находишь время и помогаешь тем, кому это очень нужно и выполняешь задания каждый месяц. Лови за это заслуженную награду!</p>

			<p class="footer_modal_award_info">Награда за выполнение заданий каждый месяц.</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>		 

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_ACTIVE_YEAR.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br> Спасибо, что помогаешь фондам весь этот год. Такие волонтеры, как ты, двигают мир навстречу переменам к лучшему! Награждаем тебя почетным званием - "Герой года"!</p>

			<p class="footer_modal_award_info">За непрерывное выполнение заданий каждый месяц на протяжении всего года.</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>	

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_FULL_INFO.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br> Спасибо за полностью заполненный профиль. Это поможет фондам сделать выбор в пользу тебя. Теперь полный порядок!</p>

			<p class="footer_modal_award_info">У волонтера полностью заполнен профиль.</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_HOPE_NOVICE.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br> Спасибо за первое успешно выполненное задание. Благодаря этим вкладам мы помогаем фондам помогать. Верим в твои новые достижения и надеемся, что ты с нами!</p>

			<p class="footer_modal_award_info">Волонтер присоединился к ProCharity и в первый же месяц натворил много добрых дел!</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_SUPERHERO.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br> Ура! Ты - наш самый активный и продуктивный волонтер! Спасибо, что ты с нами. Награждаем тебя почетным званием - "Супергерой ProCharity"!</p>

			<p class="footer_modal_award_info">Волонтер стал лауреатом премии ProCharity</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_HERO_SEASON.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br> В этом сезоне / этой осенью тобой было выполнено на 3 задания больше, чем в прошлом сезоне. Спасибо тебе за то, что не сбавляешь, а только набираешь темпы! Ты – Герой этого сезона!</p>

			<p class="footer_modal_award_info">Волонтер выполнил на Х заданий больше, чем в прошлом сезоне.</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_COMMAND_SEASON.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br> В этом сезоне / этой осенью ваша команда выполнила на 3 задания больше, чем в прошлом сезоне. Спасибо вам за то, что не сбавляете, а только набираете темпы! Вы – Команда этого сезона!</p>

			<p class="footer_modal_award_info">Компания выполнила на Х заданий больше, чем в прошлом сезоне.</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_MASTER.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br>
	        Да ты у нас - Мастер на все руки! Не зря говорят – талантливый человек талантлив во всем!Поздравляем с новым званием за успешное выполнение заданий в нескольких категориях.</p>

			<p class="footer_modal_award_info">Волонтер отличился успешным выполнением заданий в нескольких категориях.</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>

<?
//if (!isset($_COOKIE['promotion']))   
//{   
//setcookie('promotion',1,time()+31556926, '/');
?>
<div class="modal fade poll-modal" tabindex="-1" role="dialog"
     aria-labelledby="poll-modal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content align-center">
        	<!-- <div style="background-image: url(/upload/medialibrary/modal-background.svg); background-repeat: no-repeat; background-position: center; background-size: contain; height: 180px;"> -->
        	<img src="/upload/medialibrary/ACHIEVE_AMBASSADOR.svg">

            <p class="footer_modal_award">Привет, <?= $curVol->GetData()['PROPS']['NAME']['VALUE'] ?>!  <br>
	        Спасибо за приглашение, благодаря которому твой друг смог присоединиться к нашей платформе добрых дел! Ты – наш Амбассадор, в связи с чем спешим поздравить тебя с этим почетным званием!</p>

			<p class="footer_modal_award_info">Волонтер пригласил трех своих друзей присоединиться к ProCharity.</p>
            <!-- <button type="button" class="btn" data-dismiss="modal" aria-hidden="true" onclick="window.open('https://mspp.ru/','_blank'); ">Перейти на сайт</a></button> -->
            <button type="button" class="btn " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>
    </div>
</div>
<? //} ?>
