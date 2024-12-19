
// assets/js/cart.js
const cart = {
    items: [],
    
    init() {
        this.items = JSON.parse(localStorage.getItem('cart') || '[]');
        this.updateCartCount();
    },
    
    addItem(product) {
        const existingItem = this.items.find(item => item.id === product.id);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.items.push({...product, quantity: 1});
        }
        
        this.saveCart();
        this.updateCartCount();
    },
    
    removeItem(productId) {
        this.items = this.items.filter(item => item.id !== productId);
        this.saveCart();
        this.updateCartCount();
    },
    
    updateQuantity(productId, quantity) {
        const item = this.items.find(item => item.id === productId);
        if (item) {
            item.quantity = parseInt(quantity);
            if (item.quantity <= 0) {
                this.removeItem(productId);
            }
        }
        this.saveCart();
        this.updateCartCount();
    },
    
    saveCart() {
        localStorage.setItem('cart', JSON.stringify(this.items));
    },
    
    updateCartCount() {
        const count = this.items.reduce((total, item) => total + item.quantity, 0);
        document.getElementById('cart-count').textContent = count;
    }
};

// Initialize cart when page loads
document.addEventListener('DOMContentLoaded', () => {
    cart.init();
});