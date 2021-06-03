

const Menu = {

    open() {
        let menu = document.getElementById("menu")

        if(menu.style.display == "flex") {
            Menu.close()
        } else {
            menu.style.display = "flex"
            menu.style.flexDirection = "column"
            menu.innerHTML = `  
            <a onclick="Menu.close()" href="index.html">Home</a>
            <a onclick="Menu.close()" href="#noticias-em-destaque">Destaques</a>
            <a onclick="Menu.close()" href="">Vacinação</a>
            <a onclick="Menu.close()" href="#newsletter">Assine o Newsletter</a>
            `
        }   
    },

    close() {
        let menu = document.getElementById("menu")

        menu.style.display = "none"
    },
}
