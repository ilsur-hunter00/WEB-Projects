import React from 'react'
import './Modal.css'
import closeButton from '../../../../img/Path.png'

const Modal = (props) => {
    return (
        <div className={`modal__wrapper ${props.isOpened ? 'open' : 'close'} `} style={{...props.style}}>
            <div className="modal__body">
                <div className="modal__close" onClick={props.onModalClose}><img src={ closeButton } alt=""/></div>
                <h2>{props.title}</h2>
                <div className="hr-line"></div>
                <div className="modal-text__container">
                    <p className="modal-text">{props.fname}</p>
                    <p className="modal-text">{props.name}</p>
                    <p className="modal-text">{props.mname}</p>
                </div>
                <br />
                <p className="modal-text">{props.status}</p>
            </div>
        </div>
    )
}

export default Modal