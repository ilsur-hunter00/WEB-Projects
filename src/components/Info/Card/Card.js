import React, { useState } from 'react'
// import profile from '../../../img/32.png'
import './Card.css'
import SelectComponent from './SelectComponent/SelectComponent'
import Modal from './Modal/Modal'

const Card = (props) => {

    const [modal, setModal] = useState({
        modal1: false
    })

    const options = [
        { label: 'Подписка активна', value: 1, color: '#FFF', fontColor: '#A8A8A8' },
        { label: 'Приостановлена', value: 2, color: '#FFF', fontColor:'#A8A8A8' },
        { label: 'Заблокирован', value: 3, color: '#FFF', fontColor: '#A8A8A8' }
    ]

    return (
        <div>
            <div className="main-info__card" >
                <img onClick={() => setModal({...modal, modal1: true})} className="main-info__card-image" src={ props.avatar } alt="profile" />
                <p className="main-info__card-name">{ props.name + ' ' + props.fname.substring(0,1) + '.' + props.mname.substring(0,1) + '.'}</p>
                <p className="main-info__card-balance">Баланс: { props.balance.toFixed(2) }</p>
                <p className="main-info__card-last">Последнее изменение: { props.lastUpdatedAt.substring(0,10).replaceAll('-', '.') }</p>
                
                <SelectComponent options={ options } status={props.status} value={ options[props.status].value }/>
            </div>
            
            <Modal 
                title={props.name + ' ' + props.fname}
                name={props.name}
                fname={props.fname}
                mname={props.mname}
                status={options[props.status].label}
                isOpened={modal.modal1}
                onModalClose={() => setModal({
                    ...modal, modal1: false
                })}
            >
                
            </Modal>
        </div>
    )
}

export default Card