<!DOCTYPE html>
  <html lang="en-us">
    <head>
      <meta charSet="utf-8"/>
      <meta http-equiv="x-ua-compatible" content="ie=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <title data-react-helmet="true">Telescope Toggle</title>
      <link rel="stylesheet" href="css/patternfly.css" />
      <link rel="stylesheet" href="css/patternfly-addons.css" />
      <link rel="stylesheet" href="css/brands.css" />
      <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
<form action="tmp.php">
<?php
$db_connection = pg_connect("dbname=telescope user=postgres password=XXXXX");

function putToggles($domain) {
$qq = "select capability.id as id, capability.description as capability, flag.description as flag from capability,flag where domain_id = $domain and capability.flag_id = flag.id;";
$result = pg_query($qq) or die('Error message: ' . pg_last_error());
while ($row = pg_fetch_assoc($result)) {
if ($row['flag'] == "green") {
	$checked = "checked";
} else {
	$checked = "";
}
print '          	<li>' . $row['capability'] . '</li> 
<label class="pf-c-switch" for="' . $row['id'] . '">
  <input class="pf-c-switch__input" type="checkbox" name="capability-' . $row['id'] . '" id="' . $row['id'] . '" aria-labelledby="' . $row['id'] . '-on" ' . $checked . ' />
  <span class="pf-c-switch__toggle">
    <span class="pf-c-switch__toggle-icon">
      <i class="fas fa-check" aria-hidden="true"></i>
    </span>
  </span>
</label>';
}
}


?>    
    
<div class="pf-c-page" id="card-view-example">
  <a class="pf-c-skip-to-content pf-c-button pf-m-primary" href="#main-content-card-view-example" >Skip to content</a>
  <header class="pf-c-page__header">
                <div class="pf-c-page__header-brand">
                  <div class="pf-c-page__header-brand-toggle">
                    <button class="pf-c-button pf-m-plain" type="button" id="page-default-nav-example-nav-toggle" aria-label="Global navigation" aria-expanded="true" data-toggle="collapse" data-target="#mainSideNav" aria-controls="mainSideNav">
                      <i class="fas fa-bars" aria-hidden="true"></i>
                    </button>
                  </div>
                  <a class="pf-c-page__header-brand-link">
                  <img class="pf-c-brand" src="images/telescope-banner4.png" alt="Telescope logo" />
                  </a>
                </div>
               
              </header>
  <div class="pf-c-page__sidebar">
    <!-- <div class="pf-c-page__sidebar-body">
      <nav
        class="pf-c-nav"
        id="card-view-example-primary-nav"
        aria-label="Global"
      >
        <ul class="pf-c-nav__list">
          <li class="pf-c-nav__item">
            <a
              href="#" class="pf-c-nav__link pf-m-current" aria-current="page" >Operator Lens</a>
          </li>
          <li class="pf-c-nav__item">
            <a href="#" class="pf-c-nav__link">Owner Lens</a>
          </li>
          <li class="pf-c-nav__item">
            <a href="#" class="pf-c-nav__link">Executive Lens</a>
          </li>
        </ul>
      </nav>
    </div> -->
  </div>
<form class="pf-c-form" action="tmp.php" novalidate>
    <section class="pf-c-page__main-section pf-m-fill">
    <p class="pf-global--FontSize--2xl">Telescope Toggle</p>
      <div class="pf-l-gallery pf-m-gutter">
 

        <div class="pf-c-card pf-m-selectable-raised pf-m-compact" id="card-1">
          <div class="pf-c-card__header">
            
          </div>
          <div class="pf-c-card__title">
            <p id="card-1-check-label">Infrastructure Security</p>
            <div class="pf-c-content">
              <small>Key Capabilities</small>
            </div>
          </div>
          <div class="pf-c-card__body">
          <ul>
          	<?php
				putToggles(1);          	
          	?>     	
          	
          </ul>
         
          </div>
        </div>
        
        <div class="pf-c-card pf-m-selectable-raised pf-m-compact" id="card-1">
          <div class="pf-c-card__header">

            
          </div>
          <div class="pf-c-card__title">
            <p id="card-1-check-label">Data Security</p>
            <div class="pf-c-content">
              <small>Key Capabilities</small>
            </div>
          </div>
          <div class="pf-c-card__body">
          <ul>
         	<?php
				putToggles(2);          	
          	?>     	
          </ul>
<br>

          </div>
        </div>        

        <div class="pf-c-card pf-m-selectable-raised pf-m-compact" id="card-1">
          <div class="pf-c-card__header">

            
          </div>
          <div class="pf-c-card__title">
            <p id="card-1-check-label">Code Security</p>
            <div class="pf-c-content">
              <small>Key Capabilities</small>
            </div>
          </div>
          <div class="pf-c-card__body">
          <ul>
         	<?php
				putToggles(3);          	
          	?>     	

          </ul>
          <br>
         
          </div>
        </div>
 
       <div class="pf-c-card pf-m-selectable-raised pf-m-compact" id="card-1">
          <div class="pf-c-card__header">

            
          </div>
          <div class="pf-c-card__title">
            <p id="card-1-check-label">Integration Security</p>
            <div class="pf-c-content">
              <small>Key Capabilities</small>
            </div>
          </div>
          <div class="pf-c-card__body">
          <ul>
         	<?php
				putToggles(4);          	
          	?>     	

          </ul>
          <br>
        
          </div>
        </div> 
 
       <div class="pf-c-card pf-m-selectable-raised pf-m-compact" id="card-1">
          <div class="pf-c-card__header">

            
          </div>
          <div class="pf-c-card__title">
            <p id="card-1-check-label">Monitoring & Logging Security</p>
            <div class="pf-c-content">
              <small>Key Capabilities</small>
            </div>
          </div>
          <div class="pf-c-card__body">
          <ul>
         	<?php
				putToggles(5);          	
          	?>     	

          </ul>
          
          <br> 
          </div>
        </div>
  <div class="pf-c-form__group pf-m-action">
    <div class="pf-c-form__actions">
      <button class="pf-c-button pf-m-primary" type="submit">Submit Updates</button>
    </div>
  </div>        
</form>              
    </section>

    <section class="pf-c-page__main-section pf-m-no-padding pf-m-light pf-m-sticky-bottom pf-m-no-fill">
     
    </section>
  </main>
</div>   

    <!-- jQuery -->
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


    <!-- Bootstrap -->
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SlimScroll -->
    <script type="text/javascript" src="/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom Javascript -->
    <script type="text/javascript">
    <!--
      jQuery(document).ready(function() {
        jQuery('.pf-c-page__sidebar-body').slimScroll({
          height: '100%',
          width: 'var(--pf-c-page__sidebar--Width)',
        });
      });
    //-->
    </script>
<script type="text/javascript" >
$("form").submit(function () {

    var this_master = $(this);

    this_master.find('input[type="checkbox"]').each( function () {
        var checkbox_this = $(this);


        if( checkbox_this.is(":checked") == true ) {
            checkbox_this.attr('value','1');
        } else {
            checkbox_this.prop('checked',true);
            //DONT' ITS JUST CHECK THE CHECKBOX TO SUBMIT FORM DATA    
            checkbox_this.attr('value','0');
        }
    })
})
</script>
   
  </body>
</html>
