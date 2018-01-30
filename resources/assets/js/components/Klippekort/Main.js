import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Klippekort from './Klippekort';
import StoreForm from './StoreForm'

/* Main Component */
/* <Klippekort {...props} /> */
const Main = (props) => {
  return (
    <div>
      <StoreForm {...props} />
    </div>
  );
}

if(document.getElementById('nyt-klippekort')) {
  const el = document.getElementById('nyt-klippekort')
  const props = Object.assign({}, el.dataset)
  ReactDOM.render(<Main {...props} />, el);
}

if(document.getElementById('vis-klippekort')) {
  const el = document.getElementById('vis-klippekort')
  const props = Object.assign({}, el.dataset)
  ReactDOM.render(<Klippekort {...props} />, el);
}
