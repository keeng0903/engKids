<div class="footer mt-5">
    <div class="footer-width">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('asset/image/logo-small.png')}}" alt=""> EngKids the leading English learning app
                </div>
                <div class="col-6 d-flex justify-content-end">
                    © <span id="years-footer"></span> EngKids
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    window.onscroll = function() {
        myFunction()
    };
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            header
        } else {
            header.classList.remove("sticky");
        }
    }

    var today = new Date();
    var date = today.getFullYear();

    document.getElementById("years-footer").innerHTML = date;



    

    
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>