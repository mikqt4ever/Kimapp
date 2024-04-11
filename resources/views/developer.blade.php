<style>
    .profile {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .profile img {
        max-width: 100%;
        border-radius: 50%;
    }
</style>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="profile text-center">
                    <img src="https://scontent-mnl1-2.xx.fbcdn.net/v/t39.30808-6/341631163_146233108406754_5972388862115869886_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF5x83ZDhdn959R1HU0GuWB09S_LyvJ4fDT1L8vK8nh8GYn5x0_p2IqnelwuGUXO6an96x0P5PY545W1IIj5VOE&_nc_ohc=dKCiqsLnfjEAX-lJyfQ&_nc_ht=scontent-mnl1-2.xx&oh=00_AfCRmkemGJpFewEb0pfsmk6hm2MLn0I2Fr495JN1dp6eaQ&oe=66119886" alt="Profile Picture" class="mb-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p><a class="link-opacity-10-hover" href="https://github.com/mikqt4ever">
                                GITHUB</a></p>
                            <p><a class="link-opacity-10-hover" href="https://www.youtube.com/channel/UCYxLRiJ16yQMqRKFGQ1ZGmQ">
                                Youtube</a></p>
                        </li>

                    </ul>
                    <div class="container">
                        <form action="{{route('logout')}}" method="GET">

                            <div class="mb-3 form-check">
                                <button type="submit" class="btn btn-primary">LOGOUT</button>
                            </div>
                        </form>
                    </div>
                   </div>
            </div>
        </div>
    </div>