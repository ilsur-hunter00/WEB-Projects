import React from 'react'
import '../../Info/Card/Card.css'

const Card = (props) => {

  
    return (
        <div className="main-info__card">
            <img className="main-info__card-image" src={ props.avatar } alt="profile" />
            <p className="main-info__card-name">{ props.name + ' ' + props.fname.substring(0,1) + '.' + props.mname.substring(0,1) + '.'}</p>
            <p className="main-info__card-balance">Баланс: { props.balance.toFixed(2) }</p>
            <p className="main-info__card-last">Последнее изменение: { props.lastUpdatedAt.substring(0,10).replaceAll('-', '.') }</p>
            
        </div>
    )
}

export default Card