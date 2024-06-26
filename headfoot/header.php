    <nav>
            <div id="logo"><img src="home/logo.png" alt="logo"></div>
            <ul>
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#aboutme">About Me</a></li>
                <li><a href="index.php#skills">Skills</a></li>
                <li><a href="index.php#works">Works</a></li>
                <li><a href="index.php#contact" id="acontact">Contact</a></li>
            </ul>
            <div id="menuburger">
                <div id="menu">
                    <div class="ligne" id="l1"></div>
                    <div class="ligne" id="l2"></div>
                    <div class="ligne" id="l3"></div>
                </div>
            </div>
    </nav>
    <div class="contentmenutab">
        <div id="menutab">
            <ul>
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#aboutme">About Me</a></li>
                <li><a href="index.php#skills">Skills</a></li>
                <li><a href="index.php#works">Works</a></li>
                <li><a href="index.php#contact" id="acontact">Contact</a></li>
            </ul>
        </div>
    </div>
    <script>

        const menuburger = document.querySelector('#menuburger')
        const menutab = document.querySelector('#menutab')
        const links = document.querySelectorAll("#menutab a")
        console.log(links)


        menuburger.addEventListener('click',()=>{
            menuburger.classList.toggle('active-menu')
            menutab.classList.toggle('open')
        })
        links.forEach((iteration)=>{
            iteration.addEventListener('click',()=>{
                menuburger.classList.remove('active-menu')
                menutab.classList.remove('open')
            })
        })




    </script>