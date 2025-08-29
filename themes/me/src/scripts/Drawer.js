class Drawer {
    constructor(drawerSelector, toggleSelector, closeSelector) {
        this.drawer = document.querySelector(drawerSelector)
        this.toggle = document.querySelector(toggleSelector)
        this.close = closeSelector ? document.querySelector(closeSelector) : null

        if (this.toggle && this.drawer) {
            this.toggle.addEventListener('click', () => this.toggleDrawer())
        }

        if (this.close && this.drawer) {
            this.close.addEventListener('click', () => this.closeDrawer())
        }

        window.addEventListener('resize', this.handleResize.bind(this))

        document.addEventListener('keydown', (event) => {
            const isEscKeyPressed = event.key === 'Escape'
            if(isEscKeyPressed) {
                this.closeDrawer()
            }
        })
    }

    toggleDrawer() {
        const isOpen = this.toggle.classList.contains('open')
        if(isOpen) {
            this.closeDrawer()
        } else {
            this.openDrawer()
        }
    }

    openDrawer() {
        this.toggle.classList.add('open')
        this.drawer.classList.remove('h-0')
        this.drawer.classList.add('h-screen')
    }

    closeDrawer() {
        this.toggle.classList.remove('open')
        this.drawer.classList.remove('h-screen') 
        this.drawer.classList.add('h-0')
    }

    handleResize() {
        const currentWidth = window.innerWidth;
        const isLargeViewport = currentWidth >= 1024;
        const isOpen = this.toggle.classList.contains('open');

        if(isLargeViewport && isOpen) {
            this.closeDrawer()
        }
    }
}

export default Drawer