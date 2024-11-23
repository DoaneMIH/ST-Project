    let openShopping = document.querySelector('.shopping');
        let closeShopping = document.querySelector('.closeShopping');
        let list = document.querySelector('.list');
        let listCard = document.querySelector('.listCard');
        let body = document.querySelector('body');
        let total = document.querySelector('.total');
        let quantity = document.querySelector('.quantity');
        
        openShopping.addEventListener('click', ()=>{
            body.classList.add('active');
        })
        closeShopping.addEventListener('click', ()=>{
            body.classList.remove('active');
        })

        let products = [
            {
                id: 1,
                name: 'Ascorbic Acid Chewable 500mg',
                image: 'ascorbic.png',
                price:  14.00
            },
            {
                id: 2,
                name: 'Ascof Forte Menthol 600mg/5ml 120ml Syrup',
                image: 'ascof.png',
                price:  164.50
            },
            {
                id: 3,
                name: 'Lola Remedios',
                image: 'remedios.png',
                price:  140.00
            },
            {
                id: 4,
                name: 'Philpara 500mg',
                image: 'Philpara.png',
                price:  4.44
            },
            {
                id: 5,
                name: 'Advil Liquigel Softgel Capsul',
                image: 'advil.png',
                price:  8.00
            },
            {
                id: 6,
                name: 'Biogesic 500mg Caplet',
                image: 'biogesic.png',
                price:  7.00
            },
            {
                id: 7,
                name: 'Alaxan Fr 325mg/200mg',
                image: 'alaxan.png',
                price:  11.70
            },
            {
                id: 8,
                name: 'Cort 20mg',
                image: 'cort.png',
                price:  7.36
            },
            {
                id: 9,
                name: 'Glycinorm 80mg',
                image: 'Glycinorm.png',
                price:  8.50
            },
            {
                id: 10,
                name: 'Liferzin 1g',
                image: 'Liferzin.png',
                price:  75.50
            },
            {
                id: 11,
                name: 'Nasatapp 15mg ',
                image: 'nasatapp.png',
                price:  11.09
            },
            {
                id: 12,
                name: 'Neozep Forte 10mg',
                image: 'Neozep.png',
                price:  8.50
            },
        ]

        let listCards  = [];
        function initApp(){
            products.forEach((value, key) =>{
                let newDiv = document.createElement('div');
                newDiv.classList.add('item');
                newDiv.innerHTML = `
                    <img src="../assets/image/medication/${value.image}">
                    <div class="title">${value.name}</div>
                    <div class="price">₱${value.price.toLocaleString()}</div>
                    <button onclick="addToCard(${key})">Add</button>`;
                list.appendChild(newDiv);
            })
        }
        initApp();
        function addToCard(key){
            if(listCards[key] == null){
                // copy product form list to list card
                listCards[key] = JSON.parse(JSON.stringify(products[key]));
                listCards[key].quantity = 1;
            }
            reloadCard();
        }
        function reloadCard(){
            listCard.innerHTML = '';
            let count = 0;
            let totalPrice = 0;
            listCards.forEach((value, key)=>{
                totalPrice = totalPrice + value.price;
                count = count + value.quantity;
                if(value != null){
                    let newDiv = document.createElement('li');
                    newDiv.innerHTML = `
                        <div><img src="../assets/image/medication/${value.image}"/></div>
                        <div>${value.name}</div>
                        <div>${value.price.toLocaleString()}</div>
                        <div>
                            <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                            <div class="count">${value.quantity}</div>
                            <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                        </div>`;
                        listCard.appendChild(newDiv);
                }
            })
            total.innerText = totalPrice.toLocaleString();
            quantity.innerText = count;
        }
        function changeQuantity(key, quantity){
            if(quantity == 0){
                delete listCards[key];
            }else{
                listCards[key].quantity = quantity;
                listCards[key].price = quantity * products[key].price;
            }
            reloadCard();
        }