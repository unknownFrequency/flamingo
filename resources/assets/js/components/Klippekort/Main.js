import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Klippekort from './Klippekort';

/* Main Component */
const Main = (props) => {
  return (
    <div>
      <Klippekort {...props} />
    </div>
  );
}

if(document.getElementById('klippekort')) {
  const el = document.getElementById('klippekort')
  const props = Object.assign({}, el.dataset)
  ReactDOM.render(<Main {...props} />, el);
}
