import React, {useEffect, useState} from "react";
import { Link } from "react-router-dom";
import {Modal} from "../Modal/Modal";

export const Cart = (props) => {
    const show = props.show
    const products = props.products
    const [sum, setSum] = useState(0)
    const [isCheckout, setIsCheckout] = useState(false)

    function onClose() {
        setIsCheckout(false)
        console.log(111)
    }
    useEffect(() => {
        setSum(0)
        products.forEach(val => {
            setSum(sum+Number(val.price))
        })
    },[products])
    return (
        <>
            <div style={{display: show ? 'block' : 'none'}} className="container cart">
                <div className="shopping-cart ">
                    <div className="shopping-cart-header">
                        <i className="fa fa-shopping-cart cart-icon"></i><span className="badge">{products.length}</span>
                        <div className="shopping-cart-total">
                            <span className="lighter-text">Всего:</span>
                            <span className="main-color-text">{sum}₽</span>
                        </div>
                    </div>

                    <ul className="shopping-cart-items">
                        {products.map(val => {
                            return (
                                <li className="clearfix" key={val.id}>
                                    <span className="item-name">{val.name}</span>
                                    <span className="item-price">{val.price}₽</span>
                                    {/*<span className="item-quantity">Quantity: 01</span>*/}
                                </li>
                                )
                        })}
                    </ul>

                    <button onClick={e=> setIsCheckout(!isCheckout)} className="button">Купить</button>
                </div>
            </div>
            <Modal show={isCheckout} products={products} onClose={onClose}/>
        </>
    );
};