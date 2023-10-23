import {Navbar} from "../../components/Navbar/Navbar";
import React, {useEffect, useState} from "react";
import './style.css'

export default function Home() {
    const [products, setProducts] = useState([])
    const [cart, setCart] = useState([])
    function toCart(val) {
        const i = cart.indexOf(val)
        if(i === -1) {
            setCart([...cart, val])
        } else {
            setCart(cart.filter(e => e !== val))
        }
        val.inCart = !val.inCart
        console.log(cart)
    }
    async function getProducts() {
        let response = await fetch('http://localhost/php/task3/backend/products', {
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
            }
        })
        let res = await response.json()
        setProducts(res)
        console.log('res', res)
    }
    useEffect(() => {
        getProducts()
    },[])
    return (
        <div className="App">
            <Navbar products={cart}/>
            <div className="hero_area">
                        <section className="shop_section layout_padding">
                            <div className="shop_container">
                                <div className="heading_container heading_center">
                                    <h2>
                                        Спиоск товаров
                                    </h2>
                                </div>
                                <div className="row">
                                    {products.map(val => {
                                        return (
                                            <div className="card" key={val.id}>
                                                <div className="box">
                                                        <div className="img-box">
                                                        </div>
                                                        <div className="detail-box">
                                                            <h6>
                                                                {val.name}
                                                            </h6>
                                                            <button
                                                                style={{display: !val.inCart ? 'block' : 'none'}}
                                                                onClick={(e) => toCart(val)}
                                                                className="btnbuy">
                                                                <span>Добавить: {val.price}₽</span>
                                                            </button>
                                                            <button
                                                                style={{display: val.inCart ? 'block' : 'none'}}
                                                                onClick={(e) => toCart(val)}
                                                                className="btnbuy red">
                                                                <span>Убрать</span>
                                                            </button>
                                                        </div>
                                                        <div className="new"><span>New</span>
                                                        </div>
                                                </div>
                                            </div>
                                        )
                                    })}
                                </div>
                            </div>
                        </section>
            </div>
        </div>
    );
}

