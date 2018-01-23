import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ColorCard from './ColorCard';
import Rainbow from 'rainbowvis.js';

class Klippekort extends Component {
  constructor(props) {
    super(props);
  }

  percentLeft(hoursSpend, hoursMax) {
    const remainder = hoursMax - hoursSpend;
    return (remainder / hoursMax) * 100;
  }

  getColors(percentLeft) {
    const numOfItems = 100;
    const numOfItemsGreyed = numOfItems - percentLeft;
    const rainbow = new Rainbow();
    rainbow.setNumberRange(1, numOfItems);
    rainbow.setSpectrum('green', 'tomato');
    const colors = [];

    for (let i = 1; i <= numOfItems; i++) {
      if (i < numOfItemsGreyed) {
        colors.push('#999');
      } else {
        const hexColour = rainbow.colourAt(i);
        colors.push(`#${hexColour}`);
      }
    }
    return colors;
  }

  render() {
    const { hoursSpend, hoursMax } = this.props;
    const percentLeft = this.percentLeft(hoursSpend, hoursMax);
    const colors = this.getColors(percentLeft);
    const colorCards = colors.map((color, i) => {
      const style = {
        width: '100px',
        height: '3px',
        marginLeft: '40%',
        backgroundColor: color,
      };
      return <ColorCard key={`colorcard-${i}`} style={style} />;
    });

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
