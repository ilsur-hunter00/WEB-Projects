import React from 'react'
import './App.css'
import Navbar from './components/Navbar/Navbar'
import Info from './components/Info/Info'
import Blocked from './components/Blocked/Blocked'
import Active from './components/Active/Active'
import Auth from './components/Auth/Auth'
import {BrowserRouter, Route} from 'react-router-dom'
import BeatLoader from "react-spinners/BeatLoader";
import { useState, useEffect } from "react";

function App() {

  const [error, setError] = useState(null);
  const [isLoaded, setIsLoaded] = useState(false);
  const [items, setItems] = useState([]);
  const [loading, setLoading] = useState(false)

  useEffect(() => {
      fetch("https://watchlater.cloud.technokratos.com/get/array")
        .then(res => res.json())
        .then(
          (result) => {
            setIsLoaded(true);
            setItems(result);
          },
          (error) => {
            setIsLoaded(true);
            setError(error);
          }
        )
    }, [])

  useEffect(() => {
    setLoading(true)
    setTimeout(() => {
      setLoading(false)
    }, 2000)
  }, [])

  return (
    <div>
      {
        loading ? (<div className="loader"><BeatLoader color={'#6979F8'} loading={loading} size={24} /></div>) : (
          <BrowserRouter>
            <Route path="/auth" render={() => <Auth />}/>
            <div className="nav">
              <Route path="/all" render={() => <Navbar />}/>
              <Route path="/blocked" render={() => <Navbar />}/>
              <Route path="/active" render={() => <Navbar />}/>
            </div>
            <div className="main-wrapper">
              <Route path="/all" render={() => <Info state={items} />}/>
              <Route path="/blocked" render={() => <Blocked state={items} />}/>
              <Route path="/active" render={() => <Active state={items} />}/>
            </div>
          </BrowserRouter>
        ) 
      }
    </div>
  );
}

export default App;
