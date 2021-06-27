import React from 'react'
import './Info.css'
import Card from './Card/Card'
import AuthReq from '../Active/AuthReq/AuthReq'

const Info = (props) => {

    let cardItems = props.state.map((item, i) => {
        return (<Card key={i} status={item.status} avatar={item.avatar} name={item.name} fname={item.fname} mname={item.mname} balance={item.balance} lastUpdatedAt={item.lastUpdatedAt} />)
    })

    return (
        <div className="main-info__container">
            
            { cardItems }
            <AuthReq />

        </div>
    )
}

export default Info