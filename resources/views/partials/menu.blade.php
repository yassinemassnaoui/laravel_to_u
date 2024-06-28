<style>
    #menu .offcanvas-header {
        background-size: cover; /* Adjust background-size as needed */
        background-position: center; /* Adjust background-position as needed */
        height: 200px; /* Adjust height as needed */
    }
    #menu {
        background-size: cover;
        background-position: center;
        height: 100vh; /* Ensure the offcanvas menu takes full viewport height */
    }

    .offcanvas-header {
        background: rgba(0, 0, 0, 0.5); /* Optional: Add a semi-transparent background to the header for better contrast */
        padding: 1rem; /* Optional: Adjust padding for better layout */
    }

    .offcanvas-body {
        padding: 1rem; /* Optional: Adjust padding for better layout */
    }

    .list-group {
        /* Optional: Style your list group items as needed */
    }
</style>
<div id="menu" class="offcanvas offcanvas-start" style="background-image: url('{{ asset('storage/background-image/menu.jpeg') }}');" tabindex="-1"  aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header" >
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-flush">
      
    
      </div>
     
    </div>
</div>


  
