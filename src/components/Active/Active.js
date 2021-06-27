import React from 'react'
import '../Info/Info.css'
import Card from './Card/Card'
import AuthReq from './AuthReq/AuthReq'

const Active = (props) => {

    let cardItems = props.state.map((item, i) => {
        return (<Card key={i} status={item.status} avatar={item.avatar} name={item.name} fname={item.fname} mname={item.mname} balance={item.balance} lastUpdatedAt={item.lastUpdatedAt}/>)
    })

    return (
        <div className="main-info__container">
            { cardItems.filter(e => e.props.status === 0) }
            <AuthReq />
        </div>
    )
}

export default Active