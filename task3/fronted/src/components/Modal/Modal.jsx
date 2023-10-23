import React, {useState} from "react";
import "./modal.css";

export const Modal = (props) => {
    const show = props.show
    const products = props.products
    return (
        <>
            <div id="demo-modal" className={"modal " + (show ? 'target' : '')}>
                <div className="modal__content">
                    <h1>Ваш заказ</h1>

                    <ul>
                        {products.map(val => {
                        return (
                                <li key={val.id}>{val.name}</li>
                        )
                    })}
                    </ul>
                    <a onClick={e => props.onClose()} className="modal__close">&times;</a>
                </div>
            </div>
        </>

    );
};