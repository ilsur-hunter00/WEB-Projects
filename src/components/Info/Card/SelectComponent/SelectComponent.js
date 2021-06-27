import React from 'react'
import { useState } from 'react'
import Select from 'react-select'

const SelectComponent = props => {

    const customStyles = {
        option: (styles, { data }) => {
            return {
                ...styles,
                backgroundColor: data.color,
                color: data.fontColor
            }
        }
    }

    const [text, setText] = useState(props.options[props.status])

    const onChange = selectedOption => {
        setText(selectedOption)
    }

    return <Select className="main-info__card-select" styles={ customStyles } options={ props.options } onChange={ onChange } value={text} />
}   

export default SelectComponent