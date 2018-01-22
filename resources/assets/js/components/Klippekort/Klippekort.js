import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ColorCard from './ColorCard';
import Rainbow from 'rainbowvis.js';

class Klippekort extends Component {
  constructor(props) {
    super(props);
  }

  percentLeft(hoursSpend, hoursMax) {
    let remainder = hoursMax - hoursSpend;
    return (remainder / hoursMax) * 100;
  }

  getColors(percentLeft) {
    let numOfItems = 100;
    let numOfItemsGreyed = numOfItems - percentLeft;
    let rainbow = new Rainbow();
    rainbow.setNumberRange(1, numOfItems);
    rainbow.setSpectrum('green', 'tomato');
    let colors = [];

    for (let i=1; i<=numOfItems; i++) {
      if (i < numOfItemsGreyed) {
        colors.push("#999");
      } else {
        let hexColour = rainbow.colourAt(i);
        colors.push(`#${hexColour}`);
      }
    }
    return colors;
  }

  render() {
    let {hoursSpend, hoursMax} = this.props;
    const percentLeft = this.percentLeft(hoursSpend, hoursMax);
    const colors = this.getColors(percentLeft);
    const colorCards = colors.map((color, i) => {
      const style = {
        width: "100px",
        height: "3px",
        marginLeft: "40%",
        backgroundColor: color
      }
      return <ColorCard key={`colorcard-${i}`} style={style}/>
    })

    return (
      <div>
        <h1>Service klippekort</h1>
        {colorCards}
        <p className="text-center" style={{}}>Timer tilbage: {hoursMax - hoursSpend}</p>
      </div>
    );
  }
}

export default Klippekort;

// We only want to try to render our component on pages that have a div with an ID
// of "example"; otherwise, we will see an error in our console
